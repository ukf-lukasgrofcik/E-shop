<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function form() {
        return view('auth.login');
    }

    public function login(LoginRequest $request) {
        if ( Auth::attempt($request->only([ 'email', 'password' ])) ) {
            return redirect()->route('dashboard.index');
        }

        return back()->withErrors(['password' => 'These credentials do not match our records']);
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('login');
    }

}
