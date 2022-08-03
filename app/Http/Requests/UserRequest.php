<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

			'fullname' => 'required|max:20',
			'email' => 'required|max:255',
			'status' => 'required',
			'password' => 'required|max:120',

        ];
    }

    public function messages()
    {
        return [

			'fullname.required' => 'NOME COMPLETO nao foi selecionado.',
			'fullname.max' => 'NOME COMPLETO deve ter no maximo :max caracteres.',
			'email.required' => 'E-MAIL nao foi selecionado.',
			'email.max' => 'E-MAIL deve ter no maximo :max caracteres.',
			'status.required' => 'ATIVO nao foi selecionado.',
			'password.required' => 'SENHA nao foi selecionado.',
			'password.max' => 'SENHA deve ter no maximo :max caracteres.',

        ];
    }
}
