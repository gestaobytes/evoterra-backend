<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRoleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
			'permission_id' => 'required|numeric',
			'role_id' => 'required|numeric',
             
        ];
    }

    public function messages()
    {
        return [
            
			'permission_id.required' => 'PERMISSõES nao foi selecionado.',
			'permission_id.numeric' => 'PERMISSõES deve ser numerico.',
			'role_id.required' => 'PERFIS nao foi selecionado.',
			'role_id.numeric' => 'PERFIS deve ser numerico.',
             
        ];
    }
}
