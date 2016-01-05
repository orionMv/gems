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
            <li><a href="/dashboard"> Dashboard</a></li>
            <li><a href="/employees"> Employees</a></li>
            <li class="active">Edit Employee</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
          
                       
            
            <div class="col-lg-8 col-lg-offset-2">
            
                <div class="box">
                
                <div class="box-header">
                <h3 class="box-title text-uppercase"> Edit Employee </h3>
                              
                </div><!-- /.box-header -->
                <div class="box-body">
                
                {!! Form::Open(['url'=>'/employees/update', 'method'=>'POST', 'files'=>'False']) !!}
                
                <div class="form-group {{$errors->has('employee_id') ? 'has-error' : ''}}">
                
                {!! Form::label('employee_id','Employee ID') !!}
                {!! Form::text('employee_id',$employee->employee_id,['class'=>'form-control','placeholder'=>'Employee ID']); !!}
                
                <span class="helper-block text-danger"> {{$errors->first('employee_id')}} </span>
                </div>
                
                <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                
                {!! Form::label('name','Name') !!}
                {!! Form::text('name',$employee->name,['class'=>'form-control','placeholder'=>'Enter employees name!']); !!}
                
                <span class="helper-block text-danger"> {{$errors->first('name')}} </span>
                </div>
                
                <div class="form-group {{$errors->has('dob') ? 'has-error' : ''}}">
                
                {!! Form::label('dob','Date of birth') !!}
                {!! Form::text('dob',$employee->dob,['class'=>'form-control','placeholder'=>'Date of birth']); !!}
                
                <span class="helper-block text-danger"> {{$errors->first('dob')}} </span>
                </div>
                
                <div class="form-group {{$errors->has('designation') ? 'has-error' : ''}}">
                
                {!! Form::label('designation','Designation') !!}
                {!! Form::text('designation',$employee->designation,['class'=>'form-control','placeholder'=>'Designation / Job title']); !!}
                
                <span class="helper-block text-danger"> {{$errors->first('designation')}} </span>
                </div>
                
                <div class="form-group {{$errors->has('department') ? 'has-error' : ''}}">
                
                {!! Form::label('department','Department') !!}
                {!! Form::select('department',isset($departments) ? $departments : [''=>'none'],$employee->department,['class'=>'form-control']); !!}
                
                <span class="helper-block text-danger"> {{$errors->first('department')}} </span>
                </div>
                
                <div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">
                
                {!! Form::label('username','Username / Email') !!}
                {!! Form::text('username',$employee->username,['class'=>'form-control','placeholder'=>'Username / Email']); !!}
                
                <span class="helper-block text-danger"> {{$errors->first('username')}} </span>
                </div>
                
                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                
                {!! Form::label('password','Password') !!}
                {!! Form::password('password',['class'=>'form-control','placeholder'=>'Password']); !!}
                
                <span class="helper-block text-danger"> {{$errors->first('password')}} </span>
                </div>
                
                <div class="form-group {{$errors->has('started_at') ? 'has-error' : ''}}">
                
                {!! Form::label('started_at','Effective Date of Employment') !!}
                {!! Form::text('started_at',$employee->started_at,['class'=>'form-control','placeholder'=>'Started At']); !!}
                
                <span class="helper-block text-danger"> {{$errors->first('started_at')}} </span>
                </div>
                
                <div class="form-group">
                
                {!! Form::submit('Update',['class'=>'form-control btn btn-warning']); !!}
                
                </div>
                
                {!! Form::hidden('id',$employee->id) !!}
                
                
                {!! Form::Close(); !!}
                </div>
                
                </div>
            
            </div>
            
            
            
          
          </div>
        </section>
      
      </div>

@endsection