<?php

namespace App\Http\Controllers;

use App\About;
use App\Sitemenu;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends BaseController
{
    public function index(Sitemenu $sitemenu)
    {
        $this->data['about'] = About::first();
        $this->data['meta'] = $sitemenu->getMeta('about');
        return view('pages.about.index', $this->data);
    }
}