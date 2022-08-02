<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
			'name' => 'required|max:30',
			'description' => 'required|max:150',
             
        ];
    }

    public function messages()
    {
        return [
            
			'name.required' => 'PERMISSãO nao foi selecionado.',
			'name.max' => 'PERMISSãO deve ter no maximo :max caracteres.',
			'description.required' => 'DESCRIçãO nao foi selecionado.',
			'description.max' => 'DESCRIçãO deve ter no maximo :max caracteres.',
             
        ];
    }
}
