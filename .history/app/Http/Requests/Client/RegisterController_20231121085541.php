<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class RegisterController extends FormRequest
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
            'username' => 'required|min:6|unique:users, username',
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
            'password.unique' => 'Password not empty!',
            'password.min' => 'Username already exists!',
            'username.unique' => 'Username already exists!',
            'username.unique' => 'Username already exists!',
        ];

    }
}