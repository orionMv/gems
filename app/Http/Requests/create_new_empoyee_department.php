<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class create_new_empoyee_department extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:50|unique:employee_departments,name',
        ];
    }
}
