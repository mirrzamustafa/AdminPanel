

@extends('admin.layouts.layout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Students
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">List Students</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content ">
      <!-- Small boxes (Stat box) -->
    @if(session('success'))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        </div>
    </div>
    @endif
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>Age</th>
                <th>Registration #</th>
                <th>Action</th> 
            </tr>
            @foreach($students as $student)
            <tr >
                <td>{{$loop->iteration}}</td>
                <td>{{$student->student_name}}</td>
                <td>{{$student->student_father_name}}</td>
                <td>{{$student->student_age}}</td>
                <td>{{$student->reg_no}}</td>
                <td>
                    <a href="{{route('showstudentdetails',['id'=>$student->id])}}" class="btn btn-info">Show</a>
                    <a href="{{route('editstudentdetails',['id'=>$student->id])}}" class="btn btn-primary">Edit</a>
                    <a class="btn btn-danger" href="{{route('deletestudent',['id' => $student->id])}}">Delete</a>
                </td>
            </tr>
            @endforeach 
        </table>

    </section>
    <!-- /.content -->
  </div>
@endsection