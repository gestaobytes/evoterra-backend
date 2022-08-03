<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstitutionaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
			'mission' => 'required|max:1000',
			'vision' => 'required|max:1000',
			'values' => 'required|max:1000',
             
        ];
    }

    public function messages()
    {
        return [
            
			'mission.required' => 'MISSAO nao foi selecionado.',
			'mission.max' => 'MISSAO deve ter no maximo :max caracteres.',
			'vision.required' => 'VISAO nao foi selecionado.',
			'vision.max' => 'VISAO deve ter no maximo :max caracteres.',
			'values.required' => 'VALORES nao foi selecionado.',
			'values.max' => 'VALORES deve ter no maximo :max caracteres.',
             
        ];
    }
}
