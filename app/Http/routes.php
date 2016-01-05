<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
   

    Route::get('/','view_controller@dashboard');
    Route::get('/dashboard','view_controller@dashboard');
    
    
    //EMPLOYEES ROUTES
    Route::get('/employees','employees_controller@employees');
    Route::get('/employee/departments','employees_controller@employee_departments');
    
    Route::get('/employees/new','employees_controller@new_employee');
    Route::post('/employees/create','employees_controller@create');
    
    Route::get('/employees/{id}/edit','employees_controller@edit_employee');
    Route::post('/employees/update','employees_controller@update');
    
    Route::get('/employees/{id}/resign','employees_controller@resign_employee');
    Route::post('/employees/resign','employees_controller@resign');
    
    
    
    
    //EMPLOYEE DEPARTMENTS ROUTES
    Route::get('/employee/departments/new','employees_controller@new_department');
    Route::post('/employee/departments/create','employees_controller@create_department');
    
    Route::get('/employee/departments/{id}/edit','employees_controller@edit_department');
    Route::post('/employee/departments/update','employees_controller@update_department');
    
    Route::get('/employee/departments/{id}/remove','employees_controller@remove_department');
    Route::post('/employee/departments/delete','employees_controller@delete_department');
    
    
    
    
});
