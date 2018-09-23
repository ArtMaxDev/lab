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
}
