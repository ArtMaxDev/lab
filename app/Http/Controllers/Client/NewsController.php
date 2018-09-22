<?php

namespace App\Http\Controllers\Client;

use App\Models\Publication;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index(Publication $publication)
    {
        return view('client.pages.news')->with([
            'news' => $publication->all(),
        ]);
    }

    public function item(Publication $publication)
    {
        return view('client.pages.news-item')->with([
            'news' => $publication,
        ]);
    }
}
