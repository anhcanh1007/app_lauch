<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('client.auth.login');
    }

    public function about()
    {
        return view('client.pages.about');
    }

    // public function bounty()
    // {
    //     return view('client.pages.');
    // }

    public function about()
    {
        return view('client.pages.about');
    }

    public function about()
    {
        return view('client.pages.about');
    }
}