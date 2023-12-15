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
        if ($user) {
            $user->firstname = $request->first_name;
            $user->lastname = $request->last_name;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->save();
            return redirect()->route('user.view_profile', $id)->with('success', 'Update Successfully');
        } else {
            return redirect()->withErrors('Update Fails!');
        }
    }

    public function update_password(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        if ($user) {
            if ($request->password === $request->c_password) {
                $user->password = $request->c_passwprd;
                $user->save();
                return redirect()->route('user.view_profile', $id)->with('success', 'Update password successfully!');
            }
        } else {
            return redirect()->back()->withErrors('Update Password Fails!');
        }
    }
}
