<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Handle a login request to the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'user_pass' => 'required|string',
        ]);

        $user = User::where($this->username(), $request->input($this->username()))->first();

        if ($user) {
            $plainPassword = $request->input('user_pass');
            $dbHash = $user->user_pass;

            if (Hash::check($plainPassword, $dbHash)) {
                $token = auth('api')->login($user);
                return $this->sendLoginResponse($token);
            }

            if (strlen($dbHash) === 32 && ctype_xdigit($dbHash) && md5($plainPassword) === $dbHash) {
                $user->user_pass = Hash::make($plainPassword);
                $user->save();
                $token = auth('api')->login($user);
                return $this->sendLoginResponse($token);
            }
        }

        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username(): string
    {
        return 'user_login';
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     * @return \Illuminate\Http\JsonResponse
     */
    protected function sendLoginResponse(string $token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'user' => auth('api')->user()
        ]);
    }
}
