<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Messaging\SmsGlobalService;
use App\Models\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:api');
    }

    public function sendResetPasswordCode(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:users,username'
        ]);
        $user = User::where('username',$request->username)->first();
        if(!$user->email) {
            return response(['status' => false, 'message' => trans('app.you_have_no_email_update') ]);
        }
        $status = Password::sendResetLink($request->only('username'));

        return $status === Password::RESET_LINK_SENT
            ? response(['status' => true, 'message' => __($status) ])
            : response(['status' => false, 'message' => __($status) ]);


    }

}
