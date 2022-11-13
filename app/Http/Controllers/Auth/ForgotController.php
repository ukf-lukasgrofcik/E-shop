<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ForgotController extends Controller
{

    public function form() {
        return view('auth.forgot');
    }

    public function send(ForgotPasswordRequest $request) {
        Password::sendResetLink( $request->only('email') );

        return redirect()->route('password.sent');
    }

    public function sent() {
        return view('auth.forgot_sent');
    }

}
