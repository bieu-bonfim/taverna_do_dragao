<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' => 'required|max:45',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ];
    }

    public function messages(){
        return[
            'name.required' => "O campo 'Nome' precisa ser informado.",
            'name.max' => "O campo 'Nome'  deve ter no máximo :max caracteres",
            'email.required' => "O campo 'E-mail' precisa ser informado.",
            'email.email' => "O campo 'E-mail' precisa ser um e-mail válido.",
            'password.required' => "O campo 'Senha' precisa ser informado.",
            'password.min' => "O campo 'Senha' deve ter no mínimo :min caracteres.",
            'password_confirmation.required' => "O campo 'Confirmação de senha' precisa ser informado.",
            'password_confirmation.same' => "O campo 'Confirmação de senha' deve ser igual ao campo 'Senha'."
        ];
    }
}
