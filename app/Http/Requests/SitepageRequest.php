<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SitepageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
			'title' => 'required|max:120',
			'slug' => 'required|max:140',
			'text' => 'required|',
			'tags' => 'required|max:80',
			'image' => 'max:120',
			'legend' => 'max:90',
			'credit' => 'max:50',
             
        ];
    }

    public function messages()
    {
        return [
            
			'title.required' => 'TITULO nao foi selecionado.',
			'title.max' => 'TITULO deve ter no maximo :max caracteres.',
			'slug.required' => 'SLUG nao foi selecionado.',
			'slug.max' => 'SLUG deve ter no maximo :max caracteres.',
			'text.required' => 'TEXTO nao foi selecionado.',
			'tags.required' => 'TAG nao foi selecionado.',
			'tags.max' => 'TAG deve ter no maximo :max caracteres.',
			'image.max' => 'IMAGEM deve ter no maximo :max caracteres.',
			'legend.max' => 'LEGENDA deve ter no maximo :max caracteres.',
			'credit.max' => 'CRéDITO deve ter no maximo :max caracteres.',
             
        ];
    }
}
