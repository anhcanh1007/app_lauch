<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view_profile(Request $request)
    {
        return view('client.auth.profile');
    }
}