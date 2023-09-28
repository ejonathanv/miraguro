<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public function index()
    {
        return view('website.index');
    }

    public function services()
    {
        return view('website.services');
    }

    public function programs()
    {
        return view('website.programs');
    }

    public function terms()
    {
        return view('website.terms');
    }

    public function contact()
    {
        return view('website.contact');
    }

}
