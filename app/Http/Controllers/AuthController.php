<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView()
    {
        if (Auth::check()) return view('system.auth.login');

        return view('system.auth.login');
    }

    public function registerView()
    {
        if (Auth::check()) return view('system.auth.login');

        return view('system.auth.register');
    }

    public function profileView()
    {
        if (!Auth::check()) return view('system.auth.login');

        return view('system.auth.profile');
    }
}
