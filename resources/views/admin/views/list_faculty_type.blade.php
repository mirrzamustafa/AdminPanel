@extends('admin.layouts.layout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Faculty Type
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Faculty Type</li>
      </ol>
    </section>
  

    <!-- Main content -->
    <section class="content">
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
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

            @foreach($facultytypes as $type)
                <tr>
                    <td>{{$type->faculty_type}}</td>
                    <td>{{$type->dd_status}}</td>
                    <td>
                      <a class = "btn btn-info"  href="{{route('showfacultytypedetails',['id' => $type->id])}}">Show</a>
                       <a class = "btn btn-primary"  href="{{route('editfacultytypedetails',['id' => $type->id])}}">Edit</a>
                        <a class = "btn btn-danger"  href="{{route('deletefacultytype', ['id' => $type->id])}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </section>
  </div>
@endsection