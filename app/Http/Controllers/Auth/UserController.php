<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
class UserController extends Controller
{
    use ApiResponse;
    /**
     * Get the authenticated user's full information including profile and avatar.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function current(Request $request): JsonResponse
    {
        $user = $request->user();

        if (!$user) {
            return $this->errorResponse('Unauthenticated.', 401);
        }
        $user->load('profile', 'avatar');
        $response               = $user->profile;
        $response['user_name']  = $user->user_name;
        $response['avatar_url'] = $user->avatar ? $user->avatar->photo_local_path : null;
        return $this->successResponse($response , 'OK.');
    }
}
