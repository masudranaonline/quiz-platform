<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Traits\HasApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use HasApiResponse;

    /**
     * Login the user
     *
     * @return JsonResponse
     */
    public function __invoke(LoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            $user = User::query()
                ->where('email', $request->email)
                ->first();
        } else {
            return $this->errorResponse('Invalid Credentials');
        }

        if ($user->status == 'pending') {
            return $this->errorResponse('Your account is being reviewed');
        }

        if ($user->status == 'banned') {
            return $this->errorResponse('Your account is banned');
        }

        $token = $user->createToken('web')->plainTextToken;

        return $this->successResponse('Login Successfully', [
            'token' => $token,
            'type' => 'Bearer',
        ]);
    }

    /**
     * Logout the user
     *
     * @return JsonResponse
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return $this->successResponse('Logout Successfully');
    }
}
