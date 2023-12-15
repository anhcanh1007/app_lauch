<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function view_login()
    {
        return view('client.auth.login');
    }

    public function login(Request $request)
    {
        $param = $request->all();
        $user = [
            'email' => $param['email'],
            'password' => $param['password']
        ];

        if (Auth::attempt($user)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withErrors('Incorrect acc');
        }
    }
}