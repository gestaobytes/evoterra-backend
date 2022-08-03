<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemsgalleryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
			'gallery_id' => 'required|numeric',
			'src' => 'required|max:255',
			'legend' => 'max:100',
			'credit' => 'max:60',
             
        ];
    }

    public function messages()
    {
        return [
            
			'gallery_id.required' => 'GALERIAS nao foi selecionado.',
			'gallery_id.numeric' => 'GALERIAS deve ser numerico.',
			'src.required' => 'ENDEREçO FOTO/VIDEO nao foi selecionado.',
			'src.max' => 'ENDEREçO FOTO/VIDEO deve ter no maximo :max caracteres.',
			'legend.max' => 'LEGENDA deve ter no maximo :max caracteres.',
			'credit.max' => 'CREDITO deve ter no maximo :max caracteres.',
             
        ];
    }
}
