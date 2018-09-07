<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('admin.pages.users')->with([
            'users' => $user->get(),
        ]);
    }

    public function store(UserRequest $request, User $user)
    {
        return $user->create($request->only([
            'name',
            'email',
            'password',
        ]));
    }

    public function update(UserRequest $request, User $user)
    {
        return $user->update($request->only([
            'name',
            'email',
            'password',
        ]));
    }

    public function delete(User $user)
    {
        return $user->delete();
    }
}
