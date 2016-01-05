<?php
namespace App\Classes;
 
 
 use Carbon\Carbon;
 use DB;

 class UserLog{
     
     public static function log_activity($user,$op,$data){
         
         $data = [
             
             'user' => $user,
             'op' => $op,
             'data' => $data,
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
             
         ];
         
         $query = DB::table('user_log')->insert($data);
         
         if($query)return true;
         else return false;
         
     }
     
 }