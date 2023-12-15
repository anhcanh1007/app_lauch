<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
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
            $number = rand(100000, 999999);
            $user['number'] = $number;
            $user['referral_id'] = $request->referral_code ?? null;
            $email_to = $request->email;
            $email_send = 'anhcanh@gmail.com';
            Mail::send('client.auth.form_verifi_email', compact('number'), function ($email) use ($number, $email_to, $email_send) {
                $email->from($email_send);
                $email->subject('Verifi your new account in app lauch');
                $email->to($email_to);
            });
            return view('client.auth.verifi_email', compact('user'));
        } else {
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $number = $request->number;
        $number_verifi = $request->number_verifi;
        $refcode_user_referral = $request->referral_code;
        if ($number == $number_verifi) {
            $user = $request->all();
            if ($refcode_user_referral != null) {
                $user_referal = User::where('refcode', $refcode_user_referral)->first();
                $id_user_referral = $user_referal->id;
                $user['referral_id'] = $id_user_referral;
                $user['password'] = Hash::make($request->password);
                $user['email_verification'] = 1;
                User::create($user);
            } else {
                $user['referral_id'] = null;
                $user['password'] = Hash::make($request->password);
                $user['email_verification'] = 1;
                User::create($user);
            }
            return redirect()->route('view_login');
        } else {
            return redirect()->back()->withErrors('errors', 'Code is incorrect!');
        }
    }
}