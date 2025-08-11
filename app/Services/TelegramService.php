<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TelegramService
{
    protected $token;
    protected $chatId;
    protected $baseUrl;

    public function __construct()
    {
        $this->token = config('services.telegram.token');
        $this->chatId = config('services.telegram.chat_id');
        $this->baseUrl = "https://api.telegram.org/bot{$this->token}";
    }

    /**
     * Send message to Telegram chat.
     *
     * @param string $message Support HTML
     * @return \Illuminate\Http\Client\Response
     */
    public function sendMessage(string $message)
    {
        return Http::post("{$this->baseUrl}/sendMessage", [
            'chat_id' => $this->chatId,
            'text' => $message,
            'parse_mode' => 'HTML', 
        ]);
    }
}
