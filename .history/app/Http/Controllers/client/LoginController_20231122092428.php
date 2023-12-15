<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function view_login()
    {
        return view('client.auth.login');
    }

    public function login(LoginRequest $request)
    {
        if($request->validated()) {
            if()
        }
    }
}