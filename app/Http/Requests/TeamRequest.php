<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
			'name' => 'required|max:100',
			'bio' => '',
			'linkedin' => 'max:100',
			'facebook' => 'max:100',
			'twitter' => 'max:100',
			'instagram' => 'max:100',
             
        ];
    }

    public function messages()
    {
        return [
            
			'name.required' => 'NOME nao foi selecionado.',
			'name.max' => 'NOME deve ter no maximo :max caracteres.',
			'linkedin.max' => 'LINKEDIN deve ter no maximo :max caracteres.',
			'facebook.max' => 'FACEBOOK deve ter no maximo :max caracteres.',
			'twitter.max' => 'TWITTER deve ter no maximo :max caracteres.',
			'instagram.max' => 'INSTAGRAM deve ter no maximo :max caracteres.',
             
        ];
    }
}
