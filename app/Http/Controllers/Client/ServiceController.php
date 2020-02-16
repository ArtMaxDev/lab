<?php

namespace App\Http\Controllers\Client;

use App\Models\Service;

class ServiceController extends BaseController
{
    /**
     * @var \App\Models\Service
     */
    protected $service;

    public function __construct(Service $service)
    {
        parent::__construct();
        $this->service = $service;
    }

    public function item($service)
    {
        if (!$item = $this->service->where('url', $service)->first()) {
            $item = $this->service::findOrFail($service);
        }
        return view('client.pages.services-item')->with([
            'service' => $item,
        ]);
    }
}
