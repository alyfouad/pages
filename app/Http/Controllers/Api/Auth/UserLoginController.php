<?php

namespace App\Http\Controllers\Api\Auth;


use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserLoginResource;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{

    public function login(LoginRequest $request)
    {
        if ($token = auth('api')->attempt($request->only('email', 'password'))) {
            $user = Auth::guard('api')->user();
            return UserLoginResource::make($user)->additional(['access_token' => $token]);
        }
        return response(['status' => false, 'message' => ('wrong username password')], 401);
    }
}
