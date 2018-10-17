<?php

namespace App\Http\Controllers\Client;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use LaravelLocalization;
use View;

class BaseController extends Controller
{
    protected $currentLocale;
    public function __construct()
    {
        $team = [
            [
                'url' => '/client/assets/images/static/team/1.jpg',
                'name' => trans('team.members.0.name'),
                'description' => trans('team.members.0.description')
            ],
            [
                'url' => '/client/assets/images/static/team/2.jpg',
                'name' => trans('team.members.1.name'),
                'description' => trans('team.members.1.description')
            ],
            [
                'url' => '/client/assets/images/static/team/3.jpg',
                'name' => trans('team.members.2.name'),
                'description' => trans('team.members.2.description')
            ],
            [
                'url' => '/client/assets/images/static/team/4.jpg',
                'name' => trans('team.members.3.name'),
                'description' => trans('team.members.3.description')
            ],
            [
                'url' => '/client/assets/images/static/team/5.jpg',
                'name' => trans('team.members.4.name'),
                'description' => trans('team.members.4.description')
            ],
            [
                'url' => '/client/assets/images/static/team/6.jpg',
                'name' => trans('team.members.5.name'),
                'description' => trans('team.members.5.description')
            ],
        ];
        $this->currentLocale = LaravelLocalization::getCurrentLocale() ?? 'uk';
        $setting = new Setting();
        $settings = $setting->first();
        View::share('settings', $settings);
        View::share('team', $team);
        View::share('currentLocale', $this->currentLocale);
    }

    public function team()
    {
        return view('client.pages.team-' . $this->currentLocale);
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
