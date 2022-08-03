<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GaleryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
			'name' => 'required|max:150',
			'type' => 'required|max:255',
             
        ];
    }

    public function messages()
    {
        return [
            
			'name.required' => 'GALERIA nao foi selecionado.',
			'name.max' => 'GALERIA deve ter no maximo :max caracteres.',
			'type.required' => 'TIPO nao foi selecionado.',
			'type.max' => 'TIPO deve ter no maximo :max caracteres.',
             
        ];
    }
}
