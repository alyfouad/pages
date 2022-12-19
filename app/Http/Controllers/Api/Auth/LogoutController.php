<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function logout()
    {
        auth('api')->invalidate(true);
        return response(['status' => true, 'message' => __('app.success')], 200);
    }
}
