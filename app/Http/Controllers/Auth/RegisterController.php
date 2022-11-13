<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function form() {
        return view('auth.register');
    }

    public function register(RegisterRequest $request) {
        $user = User::create($request->only([ 'name', 'surname', 'email' ]));
        $user->password = bcrypt('password');
        $user->save();

        Auth::attempt($request->only([ 'email', 'password' ]));

        return redirect()->route('dashboard.index');
    }

}
