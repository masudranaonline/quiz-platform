<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Traits\HasApiResponse;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    use HasApiResponse;

    /**
     * Register the user
     *
     * @return JsonResponse
     */
    public function __invoke(RegisterRequest $request)
    {
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if ($user->wasRecentlyCreated) {
            $data = $this->registered($user);

            return $this->successResponse('User registered successfully', $data, 201);
        }

        return $this->errorResponse('User registration failed');
    }

    /**
     * The user has been registered.
     *
     * @return array
     */
    protected function registered(User $user)
    {
        // TODO: we will add more logic later like if we want to send email or auto login after registration etc.

        return [
            'user' => $user,
            // 'token' => $user->createToken('web')->plainTextToken,
            // 'type' => 'Bearer'
        ];
    }
}
