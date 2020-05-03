<?php

namespace App\Http\Requests\Permission;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:permissions,name,' . $this->route('permission')->id .  '|max:255',
            'description' => 'required',
            'role_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo del nombre es requerido',
            'name.unique' => 'El nombre ya está ocupado',
            'description.required' => 'La descripción es requerida',
            'role_id.required' => 'El rol es requerido'
        ];
    }
}
