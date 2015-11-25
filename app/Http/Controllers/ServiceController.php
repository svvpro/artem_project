<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App\Sitemenu;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServiceController extends BaseController
{
    public function index(Sitemenu $sitemenu)
    {
        $this->data['services'] = Service::first();
        $this->data['meta'] = $sitemenu->getMeta('services');
        return view('pages.services.index', $this->data);
    }
}
