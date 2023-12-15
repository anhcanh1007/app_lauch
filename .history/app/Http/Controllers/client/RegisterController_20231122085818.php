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
            $user = User::create([
                'firstname' => null,
                'lastname' => null,
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'refcode' => Str::random(6),
            ]);

            return response()->json([
                'refcode' => Str::random(6)
                'status' => true,
                'message' => 'User Created Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } else {
            return 'fails';
        }
    }
    public function test()
    {
        return User::all();
    }
}