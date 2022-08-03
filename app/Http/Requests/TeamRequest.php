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
            
			'name' => 'required|max:120',
			'image' => 'max:120',
			'minibio' => 'max:500',
			'instagram' => 'max:150',
			'linkedin' => 'max:150',
			'facebook' => 'max:150',
			'twitter' => 'max:150',
			'email' => 'max:150',
			'cellphone' => 'max:15',
             
        ];
    }

    public function messages()
    {
        return [
            
			'name.required' => 'NOME nao foi selecionado.',
			'name.max' => 'NOME deve ter no maximo :max caracteres.',
			'image.max' => 'IMAGEM deve ter no maximo :max caracteres.',
			'minibio.max' => 'MINI BIOGRAFIA deve ter no maximo :max caracteres.',
			'instagram.max' => 'INSTAGRAM deve ter no maximo :max caracteres.',
			'linkedin.max' => 'LINKEDIN deve ter no maximo :max caracteres.',
			'facebook.max' => 'FACEBOOK deve ter no maximo :max caracteres.',
			'twitter.max' => 'TWITTER deve ter no maximo :max caracteres.',
			'email.max' => 'E-MAIL deve ter no maximo :max caracteres.',
			'cellphone.max' => 'CELULAR deve ter no maximo :max caracteres.',
             
        ];
    }
}
