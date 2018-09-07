<?php

namespace App\Http\Controllers\Admin;

use App\Models\Publication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicationController extends Controller
{
    public function index(Publication $publication)
    {
        return view('admin.pages.publications')->with([
            'publications' => $publication->get(),
        ]);
    }

    public function create()
    {
        return view('admin.pages.publication-create');
    }

    public function store(Request $request, Publication $publication)
    {
        return $publication->create($request->all());
    }

    public function edit(Publication $publication)
    {
        return view('admin.pages.publication-create')->with([
            'publication' => $publication,
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
