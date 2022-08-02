<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortifolioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
			'clientname' => 'required|max:100',
			'titlework' => 'required|max:100',
			'work' => 'required|',
			'link' => 'max:200',
			'resume' => 'required|max:200',
			'city' => 'max:100',
			'uf' => 'max:2',
             
        ];
    }

    public function messages()
    {
        return [
            
			'clientname.required' => 'CLIENTE nao foi selecionado.',
			'clientname.max' => 'CLIENTE deve ter no maximo :max caracteres.',
			'titlework.required' => 'TRABALHO REALIZADO nao foi selecionado.',
			'titlework.max' => 'TRABALHO REALIZADO deve ter no maximo :max caracteres.',
			'work.required' => 'DESCRIçãO DO TRABALHO nao foi selecionado.',
			'link.max' => 'LINK (SERVIçO) deve ter no maximo :max caracteres.',
			'resume.required' => 'RESUMO DO TRABALHO nao foi selecionado.',
			'resume.max' => 'RESUMO DO TRABALHO deve ter no maximo :max caracteres.',
			'city.max' => 'CIDADE deve ter no maximo :max caracteres.',
			'uf.max' => 'UF deve ter no maximo :max caracteres.',
             
        ];
    }
}
