<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')
    }
    public function view_login()
    {
        return view('backend.auth.login');
    }

    public function login (Request $request)
    {

    }
}