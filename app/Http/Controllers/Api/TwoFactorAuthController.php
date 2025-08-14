<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PragmaRX\Google2FA\Google2FA;

class TwoFactorAuthController extends Controller
{
    /**
     * Generate a Time-based One-Time Password (TOTP) from a secret key
     * and return its remaining lifetime.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function generate(Request $request)
    {
        // 1. Validate the input
        $validator = Validator::make($request->all(), [
            'secret' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $secretKey = $request->input('secret');

        // 2. Instantiate the Google2FA library
        $google2fa = new Google2FA();

        try {
            // 3. Generate the current OTP
            $oneTimePassword = $google2fa->getCurrentOtp($secretKey);

            // 4. MỚI: Tính toán thời gian sống còn lại của mã
            // Lấy kích thước cửa sổ thời gian (mặc định là 30 giây)
            $timeStep = $google2fa->getWindow();
            
            // Thời gian còn lại được tính bằng:
            // kích thước cửa sổ - (dấu thời gian unix hiện tại % kích thước cửa sổ)
            $remainingSeconds = 0;
            if ($timeStep > 0) {
                $remainingSeconds = $timeStep - (time() % $timeStep);
            }

            // 5. Return the response with the code and its lifetime
            return response()->json([
                'status' => 'success',
                'code' => $oneTimePassword,
                'time_step_seconds' => $timeStep, // Tổng thời gian sống của 1 mã
                'expires_in_seconds' => $remainingSeconds, // Thời gian còn lại (tính bằng giây)
            ]);

        } catch (\Exception $e) {
            // Handle cases where the secret key is invalid
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid secret key. Please provide a valid Base32 secret key.',
                'details' => $e->getMessage()
            ], 400);
        }
    }
}
