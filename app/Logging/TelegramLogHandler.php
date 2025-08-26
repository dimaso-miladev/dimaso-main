<?php

namespace App\Logging;

use App\Services\TelegramService;
use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Logger;
use Illuminate\Http\Request;

class TelegramLogHandler extends AbstractProcessingHandler
{
    protected $telegramService;
    protected $request;

    public function __construct($level = Logger::ERROR, bool $bubble = true, Request $request)
    {
        parent::__construct($level, $bubble);
        $this->telegramService = new TelegramService();
        $this->request = $request;
    }

    /**
     * Ghi lại bản ghi log.
     *
     * @param array $record
     * @return void
     */
    protected function write(array $record): void
    {
        // Định dạng tin nhắn gửi đến Telegram
        $formattedMessage = $this->formatMessage($record);
        
        // Gửi tin nhắn
        $this->telegramService->sendMessage($formattedMessage);
    }

    /**
     * Định dạng tin nhắn log thành chuỗi HTML.
     *
     * @param array $record
     * @return string
     */
    protected function formatMessage(array $record): string
    {
        // Lấy thông tin Exception nếu có
        $exception = $record['context']['exception'] ?? null;
        
        $message = "<b>🚨 " . config('app.name') . " Error Report 🚨</b>\n\n";
        $message .= "<b>Message:</b>\n<pre>" . htmlspecialchars($record['message']) . "</pre>\n\n";
        $message .= "<b>Level:</b> " . $record['level_name'] . " (" . $record['level'] . ")\n";
        $message .= "<b>Channel:</b> " . $record['channel'] . "\n";
        $message .= "<b>Timestamp:</b> " . $record['datetime']->format('Y-m-d H:i:s') . "\n\n";

        // Thêm thông tin request
        if ($this->request->fullUrl()) {
            $message .= "<b>URL:</b> " . $this->request->fullUrl() . "\n";
            $message .= "<b>Method:</b> " . $this->request->method() . "\n";
            $message .= "<b>IP Address:</b> " . $this->request->ip() . "\n";
            $message .= "<b>User Agent:</b> " . $this->request->userAgent() . "\n\n";
        }
        
        // Thêm thông tin file và dòng gây lỗi từ Exception
        if ($exception instanceof \Throwable) {
            $message .= "<b>File:</b> " . $exception->getFile() . ":" . $exception->getLine() . "\n\n";
            $message .= "<b>Stack Trace:</b>\n";
            $message .= "<pre>" . htmlspecialchars(substr($exception->getTraceAsString(), 0, 3000)) . "...</pre>";
        }

        // Giới hạn độ dài tin nhắn để tránh lỗi từ Telegram API (max 4096 ký tự)
        return substr($message, 0, 4096);
    }
}
