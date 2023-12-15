<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view_profile($id)
    {
        $user = User::where('id', $id)->first();
        return view('client.auth.profile', compact('user'));
    }

    public function add_avatar(Request $request)
    {
        $user = User::where('id', $request->id);
        dd($user);
    }
}
