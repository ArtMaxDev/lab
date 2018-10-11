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
        return response()->json([
            'data' => $user->create($request->only([
                'name',
                'email',
                'password',
            ]))->toArray(),
        ]);
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->only([
            'name',
            'email',
            'password',
        ]));

        return response()->json([
            'data' => $user->toArray(),
        ]);
    }

    public function delete(User $user)
    {
        $user->delete();

        return response()->json([], 200);
    }
}
