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

    public function add_avatar(Request $request, $id)
    {
        $user = User::where('id', $id);
        return response()->json(
            [
                'user' => $user,
            ]
        );
        dd($user);
        if ($request->has('avatar')) {
            dd('ok');
        }
    }

    public function update_profile(Request $request, $id)
    {

        $user = User::where('id', $id)->first();
        if($user) {
            try {
                $user->firstname = $request->first_name;
                $user->lastname = $request->last_name;
                $user->phone = $request->phone;
                $user->address = $request->;
                $user->firstname = $request->first_name;
            } catch (\Throwable $e) {
                # code...
            }
        }

    }
}