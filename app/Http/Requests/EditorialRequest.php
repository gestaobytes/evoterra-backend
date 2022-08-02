<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditorialRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
			'name' => 'required|max:50',
			'slug' => 'required|max:60',
			'order' => 'numeric',
             
        ];
    }

    public function messages()
    {
        return [
            
			'name.required' => 'NOME nao foi selecionado.',
			'name.max' => 'NOME deve ter no maximo :max caracteres.',
			'slug.required' => 'SLUG nao foi selecionado.',
			'slug.max' => 'SLUG deve ter no maximo :max caracteres.',
			'order.numeric' => 'ORDEM deve ser numerico.',
             
        ];
    }
}
