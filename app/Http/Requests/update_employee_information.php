<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Input;

class update_employee_information extends Request
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
            'name' => 'required|string|max:100',
            'employee_id' => 'required|string|max:20|unique:employees,employee_id,'.Input::get('employee_id'),
            'dob' => 'required|dateformat:d/m/Y',
            'designation' => 'required|string',
            'department' => 'required|string|exists:employee_departments,slug',
            'username' => 'required|email|unique:employees,username,'.Input::get('id'),
            'password' => 'string|min:6',
            'started_at' => 'required|dateformat:d/m/Y',
            'id' => 'exists:employees,id',
        ];
    }
}
