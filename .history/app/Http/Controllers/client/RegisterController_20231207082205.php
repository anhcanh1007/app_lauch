<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
            // User::create([
            //     'email' => $request->email,
            //     'username' => $request->username,
            //     'password' => Hash::make($request->password),
            // ]);
            $user = $request->all();
            return view('client.auth.verifi_email', compact('user'));
        } else {
            return redirect()->back();
        }
    }

    public function get_code_verification_email($id)
    {
        $user = User::where('id', $id)->first();
        $number = rand(100000, 999999);
        $email_user = $user->email;
        $email_send = 'heloguy@gmail.com';
        Mail::send('client.auth.formVerifiEmail', compact('number'), function ($email) use ($number, $email_user, $email_send) {
            $email->from($email_send);
            $email->subject('Verifi your new account in app lauch');
            $email->to($email_user);
        });
        return redirect()->back();
    }
}
