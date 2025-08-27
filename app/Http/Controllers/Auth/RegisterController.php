<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Traits\ApiResponse;

class RegisterController extends Controller
{
    use RegistersUsers, ApiResponse;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * The user has been registered.
     */
    protected function registered(Request $request, User $user)
    {
        if ($user instanceof MustVerifyEmail) {
            return response()->json(['status' => trans('verification.sent')]);
        }

        $user->load('usermeta');

        $response = [
            'user_login' => $user->user_login,
            'display_name' => $user->display_name,
            'user_email' => $user->user_email,
            'first_name' => $user->getMetaValue('first_name'),
            'last_name' => $user->getMetaValue('last_name'),
        ];

        return $this->successResponse($response, 'User registered successfully.');
    }

    /**
     * Get a validator for an incoming registration request.
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email:filter|max:255|unique:users,user_email',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     */
    protected function create(array $data): User
    {
        return DB::transaction(function () use ($data) {

            $baseUsername = explode('@', $data['email'])[0];
            $username = $this->generateUniqueUsername($baseUsername);
            $displayName    = $data['first_name'] . ' ' . $data['last_name'];
            $userNicename   = strtolower(str_replace(' ', '-', $username));
            $hashedPassword = md5($data['password']);

            $user = User::create([
                'user_login' => $username,
                'user_pass' => $hashedPassword,  
                'user_email' => $data['email'],
                'user_nicename' => $userNicename,
                'user_url' => '',
                'display_name' => $displayName,
                'user_registered' => now(),
                'user_status' => 0,
            ]);

            $this->createUserMeta($user->ID, [
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'nickname' => $username,
            ]);

            return $user;
        });
    }

    /**
     * Generate unique username
     */
    protected function generateUniqueUsername(string $baseUsername): string
    {
        $username = $baseUsername;
        $counter = 1;

        while (User::where('user_login', $username)->exists()) {
            $username = $baseUsername . $counter;
            $counter++;
        }

        return $username;
    }

    /**
     * Create user metadata
     */
    protected function createUserMeta(int $userId, array $metadata): void
    {
        foreach ($metadata as $key => $value) {
            UserMeta::create([
                'user_id' => $userId,
                'meta_key' => $key,
                'meta_value' => $value,
            ]);
        }
    }
}
