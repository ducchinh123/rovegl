<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index()
    {

        return redirect()->route('login');
    }

    public function aboutUs()
    {

        return view('client.about-us');
    }

    public function forClient()
    {

        return view('client.for-client');
    }

    public function forCreator()
    {

        return view('client.for-creator');
    }
    public function contactUs()
    {

        return view('client.contact-us');
    }
}
