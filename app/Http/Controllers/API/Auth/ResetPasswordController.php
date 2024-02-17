<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Models\User;
use App\Traits\HasApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class ResetPasswordController extends Controller
{
    use HasApiResponse;

    /**
     * Reset the user password
     *
     * @return JsonResponse
     */
    public function __invoke(ResetPasswordRequest $request)
    {
        $checkToken = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token,
            ])
            ->first();

        if (! $checkToken) {
            return $this->errorResponse('Invalid token');
        }

        $user = User::query()
            ->where('email', $request->email)
            ->first();
        $user->password = bcrypt($request->password);
        $user->save();

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return $this->successResponse('Password reset successfully');
    }
}
