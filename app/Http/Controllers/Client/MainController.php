<?php

namespace App\Http\Controllers\Client;

use App\Models\Publication;
use App\Models\Slide;

class MainController extends BaseController
{
    public function __invoke(Publication $publication, Slide $slide)
    {
        return view('client.pages.index')->with([
            'news' => $publication->published()->get()->take(8),
            'slides' => $slide->active()->get(),
        ]);
    }
}
