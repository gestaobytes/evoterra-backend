<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

			'editorial_id' => 'required|numeric',
			'intertitle' => 'required|max:40',
			'title' => 'required|max:120',
			'subtitle' => 'max:180',
			'slug' => 'required|max:140',
			'text' => 'required',
			'tags' => 'required|max:80',
			'image' => 'max:120',
			'legend' => 'max:90',
			'credit' => 'max:50',

        ];
    }

    public function messages()
    {
        return [

			'editorial_id.required' => 'EDITORIAIS nao foi selecionado.',
			'editorial_id.numeric' => 'EDITORIAIS deve ser numerico.',
			'intertitle.required' => 'INTERTíTULO nao foi selecionado.',
			'intertitle.max' => 'INTERTíTULO deve ter no maximo :max caracteres.',
			'title.required' => 'TITULO nao foi selecionado.',
			'title.max' => 'TITULO deve ter no maximo :max caracteres.',
			'subtitle.max' => 'SUBTíTULO deve ter no maximo :max caracteres.',
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
