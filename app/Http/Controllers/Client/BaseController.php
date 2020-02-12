<?php

namespace App\Http\Controllers\Client;

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
        View::share('settings', $settings);
        View::share('currentLocale', $this->currentLocale);
    }

    public function team(Team $team)
    {
        return view('client.pages.team')
            ->with([
                'team' => $team->get()
            ]);
    }

    public function services()
    {
        return view('client.pages.services-' . $this->currentLocale);
    }

    public function services2()
    {
        return view('client.pages.services-2-' . $this->currentLocale);
    }

    public function services3()
    {
        return view('client.pages.services-3-' . $this->currentLocale);
    }
}
