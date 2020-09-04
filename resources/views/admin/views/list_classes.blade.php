@extends('admin.layouts.layout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Classes
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">List Classes</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    @if(session('success'))
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        </div>
      </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Section</th>
            <th>Seats Available</th>
            <th>Status</th>
            <th>Action</th>

        </tr>
        @foreach($classes as $class)
        <tr>    
            <td>{{$class->class_name}}</td>
            <td>{{$class->class_section_id}}</td>
            <td>{{$class->seats_available}}</td>
            <td>{{$class->status}}</td>
            <td>
                <a href="{{route('showclass', ['id' => $class->id])}}" class="btn btn-info">Show</a>
                <a href="{{route('editclass', ['id' => $class->id])}}" class="btn btn-primary">Edit</a>
                <a href="{{route('deleteclass', ['id' => $class->id])}}" class="btn btn-danger">Delete</a>
            </td>

        </tr>
        @endforeach
    </table>
    </section>
    <!-- /.content -->
  </div>
@endsection