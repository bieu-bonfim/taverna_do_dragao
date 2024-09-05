<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'email.required' => "O campo 'E-mail' precisa ser informado.",
            'email.email' => "O campo 'E-mail' precisa ser um e-mail válido.",
            'password.required' => "O campo 'Senha' precisa ser informado."
        ];
    }
}
