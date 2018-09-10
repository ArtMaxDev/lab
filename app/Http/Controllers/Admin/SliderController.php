<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slide;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(Slide $slide)
    {
        return view('admin.sliders.index')->with([
            'sliders' => $slide->get(),
        ]);
    }

    public function store(Request $request, Slide $slide)
    {
        return $slide->create($request->all());
    }

    public function update(Request $request, Slide $slide)
    {
        return $slide->update($request->all());
    }

    public function destroy(Slide $slide)
    {
        return $slide->delete();
    }
}
