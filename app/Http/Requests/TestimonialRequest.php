<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
			'client' => 'required|max:120',
			'company' => 'max:120',
			'image' => 'max:150',
			'text' => 'required|max:1000',
             
        ];
    }

    public function messages()
    {
        return [
            
			'client.required' => 'NOME CLIENTE nao foi selecionado.',
			'client.max' => 'NOME CLIENTE deve ter no maximo :max caracteres.',
			'company.max' => 'EMPRESA deve ter no maximo :max caracteres.',
			'image.max' => 'FOTO deve ter no maximo :max caracteres.',
			'text.required' => 'DEPOIMENTO nao foi selecionado.',
			'text.max' => 'DEPOIMENTO deve ter no maximo :max caracteres.',
             
        ];
    }
}
