<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return[
            'email.required' => "O campo 'E-mail' precisa ser informado.",
            'email.email' => "O campo 'E-mail' precisa ser um e-mail válido.",
            'password.required' => "O campo 'Senha' precisa ser informado.",
            'password.min' => "O campo 'Username' precisa ter no mínimo :min caracteres.",
            'username.required' => "O campo 'Username' precisa ser informado.",
            'username.min' => "O campo 'Senha' precisa ter no mínimo :min caracteres.",
        ];
    }
}
