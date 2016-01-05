<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\create_new_employee;
use Input;
use Carbon\Carbon;
use App\Classes\Employees;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\create_new_empoyee_department;
use App\Http\Requests\update_employee_information;
use App\employees_model;


class employees_controller extends Controller
{
    public function __construct(){
        
        //call module authorization function;
        
        
    }
    
    public function employee_departments(){
    
        $departments = Employees::Departments();
    
        $return = [
    
            'departments' => $departments,
    
        ];
    
        return view('app.employee_departments',$return);
    
    }
    
    public function employees(){
    
        $employees = employees_model::all();
    
        $departments = Employees::Departments_array();
    
        $return = [
    
            'employees' => $employees,
            'departments' => $departments,
    
        ];
    
        return view('app.employees',$return);
    }
    
   
    public function new_employee(){
        
        $departments = Employees::Departments_array();
        
        return view('app.employees.new',['departments' => $departments]);
        
    }
    
    public function edit_employee($id){
    
        $departments = Employees::Departments_array();
        
        $employee = employees_model::find($id);
        
        if($employee)
        return view('app.employees.edit',['departments' => $departments,'employee'=>$employee]);
    
        else
            return redirect('/employees');
    }
    
    public function resign_employee($id){
        
        $employee = employees_model::find($id);
        $departments = Employees::Departments_array();
        
        if($employee && $employee->resigned_at == null)
            return view('app.employees.resign',['departments' => $departments,'employee'=>$employee]);
        
        else return redirect('/employees');
    }
    
    
    public function new_department(){
        
        $departments = Employees::Departments();
        
        return view('app.employee_departments',['new_department'=>1,'departments'=>$departments]);
        
    }
    
    public function edit_department($id){
        
        $departments = Employees::Departments();
        
        $record = Employees::department($id);
        
        if($record)
            return view('app.employee_departments',['editorial'=>1,'departments'=>$departments,'record'=>$record]);
        
        else return redirect('/employee/departments');
    }
    
    public function remove_department($id){
        
        $departments = Employees::Departments();
        
        $record = Employees::department($id);
        
        if($record)
            return view('app.employee_departments',['removal'=>1,'departments'=>$departments,'record'=>$record]);
        
        else return redirect('/employee/departments');
        
    }
    
    
    
    public function create_department(create_new_empoyee_department $request){
        
        
        $input = Input::get();
        
        
        $data = [
            'name' => $input['name'],
            'slug' => str_slug($input['name'],'-'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            
        ];
        
        Employees::new_department($data);
        
        return redirect('/employee/departments');
        
    }
    
    public function update_department(create_new_empoyee_department $request){
        
        $input = Input::get();
        
        $id = $input['id'];
        
        $data = [
            'name' => $input['name'],
            'slug' => str_slug($input['name'],'-'),
            'updated_at' => Carbon::now(),
            
        ];
        
        Employees::update_departments($data, $id);
        
        return redirect('/employee/departments');
        
    }
    
    public function delete_department(){
        
        $id = Input::get('id');
        
        $count = Employees::delete_departments($id);
        
        if($count && $count > 0){
            
        return redirect('/employee/departments/'.$id.'/remove')->with(['count'=>$count]);
            
        }
        
        return redirect('/employee/departments');
        
    }
    
    public function create(create_new_employee $request){
        
        $input = $request->all();
        
        $data = [
            'employee_id' => str_slug($input['employee_id'],'-'),
            'name' => $input['name'],
            'dob' => $input['dob'],
            'designation' => $input['designation'],
            'department' => $input['department'],
            'username' => $input['username'],
            'password' => Hash::make($input['password']),
            'status' => 1,
            'started_at' => $input['started_at'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            
        ];

        employees_model::create($data);

        return redirect('/employees');
       
    }
    
    public function update(update_employee_information $request){
    
        $input = Input::get();
        
        $record = Employees::get_employee($input['id']);
    
        
        
        $data = [
            'employee_id' => $input['employee_id'],
            'name' => $input['name'],
            'dob' => $input['dob'],
            'designation' => $input['designation'],
            'department' => $input['department'],
            'username' => $input['username'],
            'started_at' => $input['started_at'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
    
        ];
        
        Input::get('password')!=null ? $data['password'] = Hash::make($input['password']) : "";
    
        
        Employees::update_employee($data,$input['id']);
    
        return redirect('/employees');
         
    }
    
    public function resign(){
        
        $id = $request->get('id');
        
        $data = ['status'=>0, 'resigned_at' => Carbon::now()];
        
        Employees::resign($data,$id);
        
        
        return redirect('/employees');
        
    }
    
}
