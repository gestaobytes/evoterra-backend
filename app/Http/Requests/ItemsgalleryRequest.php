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
			'name' => 'max:70',
			'legend' => 'max:120',
			'credit' => 'max:40',
			'address' => 'required|max:120',
             
        ];
    }

    public function messages()
    {
        return [
            
			'gallery_id.required' => 'GALERIAS nao foi selecionado.',
			'gallery_id.numeric' => 'GALERIAS deve ser numerico.',
			'name.max' => 'NOME deve ter no maximo :max caracteres.',
			'legend.max' => 'LEGENDA deve ter no maximo :max caracteres.',
			'credit.max' => 'CRéDITO deve ter no maximo :max caracteres.',
			'address.required' => 'ARQUIVO/ENDEREçO nao foi selecionado.',
			'address.max' => 'ARQUIVO/ENDEREçO deve ter no maximo :max caracteres.',
             
        ];
    }
}
