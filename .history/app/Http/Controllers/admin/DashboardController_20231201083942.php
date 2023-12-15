<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.pages.dashboard');
    }

    public function list_user()
    {
        $user = User::all();
        return view('backend.pages.listuser', compact('user'));
    }
}
