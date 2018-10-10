<?php

namespace App\Http\Controllers\Client;

use App\Models\Publication;

class NewsController extends BaseController
{
    public function index(Publication $publication)
    {
        return view('client.pages.news')->with([
            'news' => $publication->published()->orderBy('publicated_at', 'desc')->paginate(9),
        ]);
    }

    public function item(Publication $publication)
    {
        return view('client.pages.news-item')->with([
            'item' => $publication,
            'news' => $publication->published()->get()->take(3),
        ]);
    }
}
