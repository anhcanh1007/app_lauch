<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class UserController extends Controller
{
    public function view_profile($id)
    {
        $user = User::where('id', $id)->first();
        return view('client.auth.profile', compact('user'));
    }

    public function add_avatar(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        if ($user) {
            if ($request->has('avatar')) {
                $file = $request->avatar;
                $path = Storage::put('public/upload/', $file, 'public');
            }
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
            return redirect()->back()->withErrors('Update Fails!');
        }
    }

    public function update_password(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        if ($user) {
            if ($request->password === $request->c_password) {
                $user->password = Hash::make($request->c_password);
                $user->save();
                return redirect()->route('user.view_profile', $id)->with('success_password', 'Update password successfully!');
            } else {
                return redirect()->back()->with('errors', 'Update Password Fails!');
            }
        } else {
            return redirect()->back()->with('errors', 'Update Password Fails!');
        }
    }

    public function create_referral($id)
    {
        $user = User::where('id', $id)->first();
        if ($user) {
            $user->refcode = Str::random(6);
            $user->save();
        }
        return redirect()->back();
    }
}