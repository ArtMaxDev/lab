<?php

namespace App\Http\Controllers\Client;

use App\Models\Publication;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function __invoke(Publication $publication)
    {
        return view('client.pages.index')->with([
            'news' => $publication->all(),
        ]);
    }
}
