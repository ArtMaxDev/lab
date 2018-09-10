<?php

namespace App\Http\Controllers\Admin;

use App\Models\Publication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicationController extends Controller
{
    //TODO: вынести в переводы
    protected const STATUS_LIST = [
        0 => "Не опубликованно",
        1 => "Опубликованно",
    ];

    public function index(Publication $publication)
    {
        return view('admin.pages.publications')->with([
            'publications' => $publication->get(),
            'statusList' => self::STATUS_LIST,
        ]);
    }

    public function create()
    {
        return view('admin.pages.publication-create')->with([
            'statusList' => self::STATUS_LIST,
        ]);
    }

    public function store(Request $request, Publication $publication)
    {
        return $publication->create($request->all());
    }

    public function edit(Publication $publication)
    {
        return view('admin.pages.publication-create')->with([
            'publication' => $publication,
            'statusList' => self::STATUS_LIST,
        ]);
    }

    public function update(Request $request, Publication $publication)
    {
        return $publication->update($request->all());
    }

    public function destroy(Publication $publication)
    {
        return $publication->delete();
    }
}
