<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
           'description' => 'required|max:250',
           'price' => 'required|decimal:0,2',
           'typeFood' => 'required',
           'totalQuantity' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'name.required' => "O campo 'Nome do produto' precisa ser informado.",
            'name.max' => "O campo 'Nome do produto'  deve ter no máximo :max caracteres",
            'description.required' => "O campo 'Descrição do produto' precisa ser informado.",
            'description.max' => "O campo 'Descrição do produto' ter no máx :max  caracteres.",
            'price.required' => "O campo 'Preço' precisa ser informado.",
            'typeFood.required' => "O campo 'Tipo do produto' precisa ser informado.",
            'totalQuantity.required' => "O campo 'Quantidade total do produto' precisa ser informado.",
        ];
    }
}
