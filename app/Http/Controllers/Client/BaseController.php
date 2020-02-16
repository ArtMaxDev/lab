<?php

namespace App\Http\Controllers\Client;

use App\Models\Service;
use App\Models\Setting;
use App\Http\Controllers\Controller;
use App\Models\Team;
use LaravelLocalization;
use View;

class BaseController extends Controller
{
    protected $currentLocale;

    public function __construct()
    {
        $this->currentLocale = LaravelLocalization::getCurrentLocale() ?? 'uk';
        $setting = new Setting();
        $settings = $setting->first();
        $services = Service::published()->get(['id', 'title_uk', 'title_en', 'image', 'url', 'url_target']);
        View::share('settings', $settings);
        View::share('services', $services);
        View::share('currentLocale', $this->currentLocale);
    }

    public function team(Team $team)
    {
        return view('client.pages.team')
            ->with([
                'team' => $team->get()
            ]);
    }
}
