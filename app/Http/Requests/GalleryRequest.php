<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

			'type' => 'required|max:1',
			'title' => 'required|max:150',
			'slug' => 'required|max:200',
			'exibetitle' => 'required',

        ];
    }

    public function messages()
    {
        return [

			'type.required' => 'TIPO nao foi selecionado.',
			'type.max' => 'TIPO deve ter no maximo :max caracteres.',
			'title.required' => 'TITULO DA GALERIA nao foi selecionado.',
			'title.max' => 'TITULO DA GALERIA deve ter no maximo :max caracteres.',
			'slug.required' => 'SLUG nao foi selecionado.',
			'slug.max' => 'SLUG deve ter no maximo :max caracteres.',
			'exibetitle.required' => 'EXIBIR TITULO? nao foi selecionado.',

        ];
    }
}
