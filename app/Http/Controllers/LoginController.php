<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    //
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout']]);
    } // end __construct

    public function index()
    {
        return view('content.login');
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials,$request->remember))
        {
            $request->session()->regenerate();
            return response()->json(['type' => 'success','status' => 200]);
        }

        else
            return response()->json(['type' => 'error','status' => 422,"message" => "The provided credentials do not match our records"]);

    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
