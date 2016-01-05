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
            <li class="active">Employee Departments</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
          
            <div class="col-lg-12">
            
                <div class="box">
                
                <div class="box-header text-center employee_buttons">
               
               <a href="/employee/departments/new" class="btn btn-primary">NEW DEPARTMENT</a>
               
                </div><!-- /.box-header -->
                <div class="box-body">
                
                <table class="table table-bordered" id="departments">

                    <thead>
                    
                        <tr>
                        
                            <th> # </th>
                            <th> Name </th>
                            <th> Slug </th>
                            <th> Created At </th>
                            <th> Updated At </th>
                            <th></th>
                            <th></th>         
                        </tr>
                    
                    </thead>
                    
                    <tbody>
                    
                        @if(isset($departments))
                        
                        @foreach($departments as $department)
                        
                            <tr class="{{isset($record) && $record->id == $department->id ? 'text-primary text-bold' : ''}}">
                        
                            <td>{{$department->id}}</td>
                            <td>{{$department->name}}</td>
                            <td>{{$department->slug}}</td>
                            <td>{{$department->created_at}}</td>
                            <td>{{$department->updated_at}}</td>
                            <td> <a href="/employee/departments/{{$department->id}}/edit" class="label label-warning edit" data-id="{{$department->id}}" data-name="{{$department->name}}">EDIT</a> </td>
                            <td> <a href="/employee/departments/{{$department->id}}/remove" class="label label-danger">REMOVE</a> </td>
                        
                        </tr>
                        
                        @endforeach
                        
                        @endif
                    
                         
                        
                        
                        
                    
                    </tbody>
                    
                </table>
                
                </div>
                
                </div> <!--  END BOX -->
                
                @if(isset($editorial))
                <div class="box">
                
                <div class="box-body">
                
                {!! Form::open(['url'=>'/employee/departments/update','method'=>'POST','files'=>'False']) !!}
                
                <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                
                    {!! Form::label('name','Department Name') !!}
                    {!! Form::text('name',$record->name,['class'=>'form-control','placeholder'=>'Department Name']) !!}                
                
                <span class="helper-block text-danger"> {{$errors->first('name')}} </span>
                </div>
                
                <div class="form-group">
                
                    {!! Form::hidden('id',$record->id) !!}
                    
                    {!! Form::submit('edit department',['class'=>'form-control btn btn-warning text-uppercase']) !!}
                
                </div>
                
                
                {!! Form::close() !!}
                
                </div>
                
                </div> <!--  END BOX -->
                @endif
                
                
                @if(isset($new_department))
                <div class="box">
                
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
                @endif
                
                
                
                @if(isset($removal))
                <div class="box">
                
                <div class="box-body">
                
                {!! Form::open(['url'=>'/employee/departments/delete','method'=>'POST','files'=>'False']) !!}
                
                <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                
                    {!! Form::label('name','Department Name') !!}
                    {!! Form::text('name',$record->name,['class'=>'form-control','placeholder'=>'Department Name','disabled'=>'disabled']) !!}                
                
                <span class="helper-block text-danger"> {{$errors->first('name')}} </span>
                <span class="helper-block text-danger"> {{ session()->has('count') ? "Please transfer employees of this department to another before deleting the department." : "" }} </span>
                </div>
                
                <div class="form-group">
                
                    {!! Form::hidden('id',$record->id) !!}
                    
                    {!! Form::submit('remove department',['class'=>'form-control btn btn-danger text-uppercase']) !!}
                
                </div>
                
                
                {!! Form::close() !!}
                
                </div>
                
                </div> <!--  END BOX -->
                @endif
                
            
            </div> <!-- END COL -->
            
            
            
            
            
            
          
          </div>
        </section>
      
      </div>

@endsection