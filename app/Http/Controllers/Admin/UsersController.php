<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersController extends Controller
{

    public function index() {
        $users = User::orderBy('name', 'asc')->orderBy('surname', 'asc')->get();

        return view('admin.users.index', compact('users'));
    }

}
