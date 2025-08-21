<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth; // Import Facade Auth

class UserController extends Controller
{
    use ApiResponse;
    /**
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function current(Request $request): JsonResponse
    {
        $user = Auth::user();
        $user->load('usermeta');

        $response = [
            'id' => $user->ID,
            'login_name' => $user->user_login,
            'display_name' => $user->display_name,
            'email' => $user->user_email,
            'registered_at' => $user->user_registered->toIso8601String(), // Dùng Carbon để định dạng
        ];

        $response['first_name'] = $user->getMetaValue('first_name');
        $response['last_name'] = $user->getMetaValue('last_name');
        $response['description'] = $user->getMetaValue('description');

        // Nếu bạn dùng plugin như 'WP User Avatar', meta_key có thể là 'wp_user_avatar'
        //$avatarId = $user->getMetaValue('wp_user_avatar'); // ID của ảnh trong media library
        //$response['avatar_url'] = $avatarId ? wp_get_attachment_url($avatarId) : $this->getGravatarUrl($user->user_email);
        // Lưu ý: wp_get_attachment_url là hàm của WordPress, bạn cần tự định nghĩa nó nếu không chạy trong môi trường WP.
        $response['avatar_url'] = $this->getGravatarUrl($user->user_email);
        return $this->successResponse($response, 'User information retrieved successfully.');
    }

    /**
     * Helper function to get Gravatar URL.
     *
     * @param string $email
     * @param int $size
     * @return string
     */
    private function getGravatarUrl(string $email, int $size = 200): string
    {
        $hash = md5(strtolower(trim($email)));
        return "https://www.gravatar.com/avatar/{$hash}?s={$size}&d=mp";
    }
}
