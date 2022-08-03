<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

			'title' => 'required|max:120',
			'image' => 'max:120',
			'text' => 'required',

        ];
    }

    public function messages()
    {
        return [

			'title.required' => 'TITULO nao foi selecionado.',
			'title.max' => 'TITULO deve ter no maximo :max caracteres.',
			'image.max' => 'IMAGEM deve ter no maximo :max caracteres.',
			'text.required' => 'TEXTO nao foi selecionado.',

        ];
    }
}
