<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends BaseController
{
    public function index()
    {
        $this->data['about'] = About::first();
        return view('pages.about.index', $this->data);
    }
}