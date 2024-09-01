<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
           'customerName' => 'required|max:45',
           'customerPhone' => 'required|max:15',
           'tableNumber' => 'required|integer'
        ];
    }

    public function messages()
    {
        return[
            'customerName.required' => "O campo 'Nome do cliente' precisa ser informado.",
            'customerName.max' => "O campo 'Nome do cliente'  deve ter no máximo :max caracteres",
            'customerPhone.required' => "O campo 'Telefone do cliente' precisa ser informado.",
            'customerPhone.max' => "O campo 'Telefone do cliente' ter no máx :max  caracteres.",
            'tableNumber.required' => "O campo 'Número da mesa' precisa ser informado."
        ];
    }
}
