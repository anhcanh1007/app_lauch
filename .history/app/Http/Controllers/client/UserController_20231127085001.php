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
        $id_user = $request->id_user;
        $user = User::where('id', $id_user);
        return response()->json(
            'user' => $user;
        )
        dd($user);
        if ($request->has('avatar')) {
            dd('ok');
        }
    }
}