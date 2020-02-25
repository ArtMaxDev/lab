<?php

namespace App\Http\Controllers\Client;

use App\Models\Publication;
use App\Models\Slide;
use App\Models\Team;

class MainController extends BaseController
{
    public function __invoke(Publication $publication, Slide $slide, Team $team)
    {
        return view('client.pages.index')->with([
            'news' => $publication->published()->get()->take(8),
            'slides' => $slide->active()->orderBy('sorting')->get(),
            'team' => $team->get(),
        ]);
    }
}
