<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|min:6|unique:users,username',
            'password' => ['required', 'min:6', 'regex:/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]/'],
            'c_password' => 'required|same:password',
            'email' => 'required|email|unique:users,email',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Username not empty!',
            'username.min' => 'Username must have at least 6 characters!',
            'username.unique' => 'Username already exists!',
            'password.required' => 'Password not empty!',
            'password.min' => 'Password must have at least 6 characters!',
            'password.unique' => 'Password already exists!',
            'username.regex' => 'Password must have at least one lowercase letter, one uppercase letter, number and special character!',
            'c_password.required' => 'This field cannot be left blank',
            'c_password.same' => 'Password do not match',
            'email.required' => 'Email not empty!',
            'email.email' => 'Email must be in the correct format!',
            'email.unique' => ''
        ];
    }
}