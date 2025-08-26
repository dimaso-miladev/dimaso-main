<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\VerifyEmailException;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    /**
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        $validate = $request->validate([
            $this->username() => 'required|string',
            'user_pass' => 'required|string',
        ]);

        $user = User::where($this->username(), $validate[$this->username()])->first();

        if ($user) {
            $passwordCorrect = false;
            $plainPassword = $validate['user_pass'];
            $dbHash = $user->user_pass;

            if (strlen($dbHash) === 32 && ctype_xdigit($dbHash)) {
                if (md5($plainPassword) === $dbHash) {
                    $passwordCorrect = true;
                }
            } else {
                $hasher = new PasswordHash(8, true);
                if ($hasher->CheckPassword($plainPassword, $dbHash)) {
                    $passwordCorrect = true;
                }
            }

            if ($passwordCorrect) {
                $token = auth('api')->login($user);
                return $this->sendLoginResponse($token);
            }
        }

        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    /**
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     *
     * @return string
     */
    public function username(): string
    {
        return 'user_login';
    }

    /**
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
