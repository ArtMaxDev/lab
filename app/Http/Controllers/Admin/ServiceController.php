<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    protected const STATUS_LIST = [
        0 => "Не опубликованно",
        1 => "Опубликованно",
    ];

    public function index(Service $service)
    {
        return view('admin.pages.services')->with([
            'services' => $service->latest()->get(),
            'statusList' => self::STATUS_LIST,
        ]);
    }

    public function create()
    {
        return view('admin.pages.services-create')->with([
            'statusList' => self::STATUS_LIST,
        ]);
    }

    public function store(Request $request, Service $service)
    {
        return response()->json([
            'data' => $service->create($request->all())->toArray(),
        ]);
    }

    public function edit(Service $service)
    {
        return view('admin.pages.services-create')->with([
            'service' => $service,
            'statusList' => self::STATUS_LIST,
        ]);
    }

    public function update(Request $request, Service $service)
    {
        $service->update($request->all());

        return response()->json([
            'data' => $service->toArray(),
        ]);
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return response()->json([], 200);
    }
}
