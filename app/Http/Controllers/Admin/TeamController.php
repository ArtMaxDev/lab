<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Team $team)
    {
        return view('admin.pages.team')->with([
            'team' => $team->get(),
        ]);
    }

    public function store(Request $request, Team $team)
    {
        return response()->json([
            'data' => $team->create($request->all())->toArray(),
        ]);
    }

    public function update(Request $request, Team $team)
    {
        $team->update($request->all());

        return response()->json([
            'data' => $team->toArray(),
        ]);
    }

    public function destroy(Team $team)
    {
        $team->delete();

        return response()->json([], 200);
    }
}
