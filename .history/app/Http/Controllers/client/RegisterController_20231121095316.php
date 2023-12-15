<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function showFormRegister()
    {
        return view('client.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        if ($request->validated()) {
            User::create([
                'firstname' => null,
                'lastname' => null,
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'phone' => null,
                'phone_code' => null,
                'country_code' => null,
                'referral_id' => null,
                'email_verification' => 0,
                'refcode' => Str::random(6),
            ]);

            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully'
            ]);
        } else {
            return 'fails';
        }
    }
    public function test()
    {
        return User::all();
    }
}