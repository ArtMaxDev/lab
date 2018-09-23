<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index(Setting $setting)
    {
        return view('admin.pages.settings')->with([
            'settings' => $setting->first(),
        ]);
    }

    public function update(Request $request, Setting $setting)
    {
        $settings = $setting->first();
        $settings->update($request->all());

        return response()->json([
            'data' => $settings->toArray(),
        ]);
    }
}
