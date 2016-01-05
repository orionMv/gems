@extends('app.layout')


@section('page_title')
Employees
@endsection

@section('page_styles')
<!-- DATA TABLES -->
    <link href="/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection

@section('page_scripts')
<!-- DATA TABES SCRIPT -->
    <script src="/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='/plugins/fastclick/fastclick.min.js'></script>
    <!-- InputMask -->
    <script src="/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    
    <script type="text/javascript" src="employees.js"></script>
    
    <script type="text/javascript">
      $(function () {
   	  $("#dob").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
     	$("#started_at").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        $('#employees').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": true,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });


    </script>
@endsection

@section('page')

<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Employees
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Employees</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
          
            <div class="col-lg-12">
            
                <div class="box">
                
                <div class="box-header text-center employee_buttons">
               
               <a href="/employees/new" class="btn btn-default new">New Employee</a> 
               <a href="" class="btn btn-warning edit disabled">Edit Employee</a>
               <a href="" class="btn btn-danger resign disabled">Resign Employee</a> 
               |
               <a href="/employee/departments" class="btn btn-success salary">Departments</a>
                
                </div><!-- /.box-header -->
                <div class="box-body">
                
                <table class="table table-bordered" id="employees">

                    <thead>
                    
                        <tr>
                        
                            <th> # </th>
                            <th> Employee ID </th>
                            <th> Name </th>
                            <th> DOB </th>
                            <th> Designation </th>
                            <th> Department </th>
                            <th> Username </th>
                            <th> Status </th>
                            <th> Started At </th>
                            <th> Resigned At </th>
                        
                        </tr>
                    
                    </thead>
                    
                    <tbody>
                    
                        @if(isset($employees))
                        
                        @foreach($employees as $employee)
                        
                            <tr data-id="{{$employee->id}}">
                        
                            <td>{{$employee->id}}</td>
                            <td>{{$employee->employee_id}}</td>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->dob}}</td>
                            <td>{{$employee->designation}}</td>
                            <td>{{$departments[$employee->department]}}</td>
                            <td>{{$employee->username}}</td>
                            <td>{{$employee->status == 1 ? "Active" : "Inactive"}}</td>
                            <td>{{$employee->started_at}}</td>
                            <td>{{$employee->resigned_at ? $employee->resigned_at : ''}}</td>
                        
                        </tr>
                        
                        @endforeach
                        
                        @endif
                    
                         
                        
                        
                        
                    
                    </tbody>
                    
                </table>
                
                </div>
                
                </div>
            
            </div>
            
            
            
            
            
            
          
          </div>
        </section>
      
      </div>

@endsection