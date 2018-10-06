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
        $team = [
            [
                'url' => '/client/assets/images/static/team/1.jpg',
                'name' => 'Базась Володимир Миколайович',
                'description' => 'головний лікар, к.м.н., лікар вищої категорії, онкохірург, онколог'
            ],
            [
                'url' => '/client/assets/images/static/team/2.jpg',
                'name' => 'Бездєнєжних Наталя Олександрівна',
                'description' => 'директор, к.б.н.'
            ],
            [
                'url' => '/client/assets/images/static/team/3.jpg',
                'name' => 'Лук‘янова Наталія Юріївна',
                'description' => 'д.б.н., експерт, лікар-лаборант'
            ],
            [
                'url' => '/client/assets/images/static/team/4.jpg',
                'name' => 'Бучинська Любов Георгіївна',
                'description' => 'д.б.н., генетик'
            ],
            [
                'url' => '/client/assets/images/static/team/5.jpg',
                'name' => 'Іванівська Тетяна Степанівна',
                'description' => 'к.б.н., лікар-лаборант'
            ],
            [
                'url' => '/client/assets/images/static/team/6.jpg',
                'name' => 'Яловенко Тетяна Миколаївна',
                'description' => 'к.б.н., заступник директора'
            ],
        ];
        $setting = new Setting();
        $settings = $setting->first();
        View::share('settings', $settings);
        View::share('team', $team);
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
