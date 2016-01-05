<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Stringy\StaticStringy;

class create_new_employee extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
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
            'employee_id' => 'required|string|max:20|unique:employees,employee_id',
            'dob' => 'required|dateformat:d/m/Y',
            'designation' => 'required|string',
            'department' => 'required|string|exists:employee_departments,slug',
            'username' => 'required|email|unique:employees,username',
            'password' => 'required|string|min:6',
            'started_at' => 'required|dateformat:d/m/Y'
        ];
    }
}
