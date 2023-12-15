<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function view_login()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $admin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('admin')->attempt($admin)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->withErrors('Login Fails!');
        }
    }

    public function register(Request $request)
    {
        Admin::create([]
            'email' => $request->email,
            'password' => $request->password,
        );
    }
}