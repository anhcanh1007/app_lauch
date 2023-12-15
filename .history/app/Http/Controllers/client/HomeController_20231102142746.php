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

    public function faq()
    {
        return view('client.pages.faq');
    }

    public function blog()
    {
        return view('client.pages.blog');
    }

    public function contact()
    {
        return view('client.pages.contact');
    }
}
