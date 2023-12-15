<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function view_login()
    {
        return view('client.auth.login');
    }

    public function login(LoginRequest $request)
    {
        if ($request->validated()) {
            if (Auth::attempt($request->only(['email', 'password']))) {
                $user = auth()->user();
                return view('client.layouts.dashboard');
                // return response()->json([
                //     'status' => true,
                //     'message' => 'User Login Successfully',
                //     'token' => $user->createToken("API Token")->plainTextToken,
                // ], 200);
            } else {
                // return response()->json([
                //     'status' => false,
                //     'message' => 'Email & Password does not match with our record.'
                // ]);
                return redirect()->back()->withErrors('Incorrect email or password!');
            }
        } else {
            // return response()->json(
            //     [
            //         'status' => false,
            //         'message' => $request->errors(),
            //     ],
            //     422
            // );
            return redirect()->back();
        }
    }

    public function logout()
    {
        
    }
}