<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slide;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(Slide $slide)
    {
        return view('admin.pages.sliders')->with([
            'sliders' => $slide->get(),
        ]);
    }

    public function store(Request $request, Slide $slide)
    {
        return response()->json([
            'data' => $slide->create($request->all())->toArray(),
        ]);
    }

    public function update(Request $request, Slide $slide)
    {
        $slide->update($request->all());

        return response()->json([
            'data' => $slide->toArray(),
        ]);
    }

    public function destroy(Slide $slide)
    {
        $slide->delete();

        return response()->json([], 200);
    }
}
