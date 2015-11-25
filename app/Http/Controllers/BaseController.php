<?php

namespace App\Http\Controllers;

use App\Sitemenu;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function __construct(Sitemenu $sitemenu)
    {
        $this->data = [];
        $this->data['menu'] = $sitemenu->getMenu();
    }
}
