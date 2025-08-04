<?php

namespace App\Http\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponse
{
    /**
     * Trả về response thành công.
     *
     * @param  mixed  $data
     * @param  string $message
     * @param  int    $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function successResponse($data, string $message = 'success', int $code = 200): JsonResponse
    {
        return response()->json([
            'data'             => $data,
            'response_code'    => $code,
            'response_message' => $message,
        ], $code);
    }

    /**
     * Trả về response lỗi.
     *
     * @param  string $message
     * @param  int    $code
     * @param  mixed|null  $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorResponse(string $message, int $code, $data = null): JsonResponse
    {
        return response()->json([
            'data'             => $data,
            'response_code'    => $code,
            'response_message' => $message,
        ], $code);
    }
}
