<?php

namespace App\Http\Controllers\Client;

use App\Models\Publication;
use App\Http\Controllers\Controller;
use App\Models\Slide;

class MainController extends Controller
{
    public function __invoke(Publication $publication, Slide $slide)
    {
        return view('client.pages.index')->with([
            'news' => $publication->all(),
            'slides' => $slide->all(),
        ]);
    }
}
