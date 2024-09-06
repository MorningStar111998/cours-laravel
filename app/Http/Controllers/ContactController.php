<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use GuzzleHttp\Psr7\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {

        return view('confirm', ['infos' => $request]);
    }
}
