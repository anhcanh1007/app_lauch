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
        $id_user = $request->id_
        $user = User::where('id', $request->id_user);
        dd($user);
        if ($request->has('avatar')) {
            dd('ok');
        }
    }
}