<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.pages.login');
    }

    public function login(LoginRequest $request)
    {
        Auth::attempt($request->only(['email', 'password']));

        return redirect()->route('admin.users.index');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('admin.users.login');
    }
}
