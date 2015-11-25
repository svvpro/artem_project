<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('pages.about.index', compact('about'));
    }
}