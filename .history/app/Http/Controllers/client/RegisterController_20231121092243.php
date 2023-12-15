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
        // $user = User::all();
        // return 'asdsd';
        if ($request->validated()) {
            return 'asasdasd';
        } else {
            return 'fails';
        }
    }
    public function test()
    

}
