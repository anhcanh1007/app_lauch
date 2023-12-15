<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

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
                'password' => Hash
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
