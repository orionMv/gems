@extends('app.layout')


@section('page_title')
Employee Departments
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
            Employee Departments
          </h1>
          <ol class="breadcrumb">
            <li><a href="/">Dashboard</a></li>
            <li><a href="/employees">Employees</a></li>
            <li><a href="/employee/departments">Departments</a></li>
            <li class="active">Create New Department</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
          
            <div class="col-lg-8 col-lg-offset-2">
            
                <div class="box">
                
                <div class="box-header">
                    <h3 class="box-title"> Create New Department </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                
                {!! Form::open(['url'=>'/employee/departments/create','method'=>'POST','files'=>'False']) !!}
                
                <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                
                    {!! Form::label('name','Department Name') !!}
                    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Department Name']) !!}                
                
                <span class="helper-block text-danger"> {{$errors->first('name')}} </span>
                </div>
                
                <div class="form-group">
                
                    {!! Form::submit('create new department',['class'=>'form-control btn btn-success']) !!}
                
                </div>
                
                
                {!! Form::close() !!}
                
                </div>
                
                </div> <!--  END BOX -->
                
               
            
            </div> <!-- END COL -->
            
            
            
            
            
            
          
          </div>
        </section>
      
      </div>

@endsection