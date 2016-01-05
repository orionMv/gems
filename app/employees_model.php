<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees_model extends Model
{
    protected  $table = "employees";
    protected  $fillable = ['employee_id','name','dob','designation','department','status','username','password','started_at','created_at','updated_at'];
    


    public static function resign($data,$id){
    
        //get current user array and convert to json
    
        $query = DB::table('employees')->where('id',$id)->update($data);
    
        if($query){
             
    
           // UserLog::log_activity(json_encode(['username'=>'sample']), 'Employee resigned', json_encode($data));
             
             
            return true;
        }
         
         
        else return false;
    
    }
}
