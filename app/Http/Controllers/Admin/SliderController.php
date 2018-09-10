<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(Slider $slider)
    {
        return view('admin.sliders.index')->with([
            'sliders' => $slider->get(),
        ]);
    }

    public function store(Request $request, Slider $slider)
    {
        return $slider->create($request->all());
    }

    public function update(Request $request, Slider $slider)
    {
        return $slider->update($request->all());
    }

    public function destroy(Slider $slider)
    {
        return $slider->delete();
    }
}
