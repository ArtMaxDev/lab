<?php

namespace App\Http\Controllers\Client;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use LaravelLocalization;
use View;

class BaseController extends Controller
{
    public function __construct()
    {
        $setting = new Setting();
        $settings = $setting->first();
        View::share('settings', $settings);
        View::share('currentLocale', LaravelLocalization::getCurrentLocale());
    }

    public function team()
    {
        return view('client.pages.team');
    }

    public function services()
    {
        return view('client.pages.services');
    }

    public function services2()
    {
        return view('client.pages.services-2');
    }

    public function services3()
    {
        return view('client.pages.services-3');
    }
}
