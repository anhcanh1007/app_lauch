<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showFormRegister()
    {
        return view('client.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        if($request->validated())
        {
            return 'asasdasd'
        }
    }
}
