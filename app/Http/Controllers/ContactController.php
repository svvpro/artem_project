<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sitemenu;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends BaseController
{
    public function index(Sitemenu $sitemenu)
    {
        $this->data['meta'] = $sitemenu->getMeta('contacts');
        return view('pages.contacts.index', $this->data);
    }
}
