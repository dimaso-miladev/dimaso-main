<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\TelegramService; // Thêm dòng này
use Illuminate\Support\Facades\Log; // Thêm dòng này
use Illuminate\Validation\ValidationException; // Thêm dòng này

class ContactController extends Controller
{
    protected $telegramService;

    // Sử dụng constructor injection để nạp TelegramService
    public function __construct(TelegramService $telegramService)
    {
        $this->telegramService = $telegramService;
    }

    public function sendMailContact(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'your_name' => 'required|string|max:255',
                'your_mail' => 'required|email',
                'your_phone' => 'required|string|max:20',
                'your_message' => 'required|string',
            ]);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
        
        $message = "<b>🔔 Có liên hệ mới từ Website</b>\n\n"
                 . "<b>👤 Họ và tên:</b> " . htmlspecialchars($validatedData['your_name']) . "\n"
                 . "<b>📧 Email:</b> " . htmlspecialchars($validatedData['your_mail']) . "\n"
                 . "<b>📞 Số điện thoại:</b> " . htmlspecialchars($validatedData['your_phone']) . "\n\n"
                 . "<b>📝 Nội dung:</b>\n" . htmlspecialchars($validatedData['your_message']);

        try {
            $response = $this->telegramService->sendMessage($message);

            if ($response->failed()) {
                Log::error('Telegram API Error: ' . $response->body());
                return response()->json(['message' => 'Failed to send message.'], 500);
            }
            
            Log::info('Contact form submitted and sent to Telegram: ', $validatedData);

            return response()->json(['message' => 'success'], 200);

        } catch (\Exception $e) {
            Log::error('Error sending message to Telegram: ' . $e->getMessage());
            return response()->json(['message' => 'An unexpected error occurred.'], 500);
        }
    }
}
