<?php

namespace App\Classes;

use DB;
use App\Classes\UserLog;
use PhpParser\Node\Expr\Array_;
use Carbon\Carbon;


class Employees{
  
    
   
    
    public static function Departments(){
    
        $departments = DB::table('employee_departments')->orderBy('id','ASC')->get();
    
    
        if($departments){

            return $departments;
    
        }
    
    }
    
    public static function department($id){
        
        $department = DB::table('employee_departments')->where('id',$id)->first();
        
        if($department) return $department;
        
        else return false;
        
    }
    
    public static function Departments_array(){
        
        $departments = DB::table('employee_departments')->orderBy('name','ASC')->get();
        
        $return_array = array();
        
        if($departments){
            
            foreach($departments as $department){
                
                $return_array[$department->slug] = $department->name;
            }
            
            return $return_array;
            
        }
        
    }
    

    

    
    
   
    
    
    
    
    
    
}