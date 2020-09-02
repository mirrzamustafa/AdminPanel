@extends('admin.layouts.layout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Sections
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">List Students</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     @if(session('success'))
        <div class="col-lg-12">
          <div class="row">
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

        <tr>
        @foreach($sections as $section)
          <td>{{$section->section_name}}</td>
          <td>{{$section->status}}</td>
          <td>
            <a href="{{route('showclasssection',['id' => $section->id])}}" class = "btn btn-info">Show</a>
            <a href="{{route('editclasssection',['id' => $section->id])}}" class = "btn btn-primary">Edit</a>
            <a href="{{route('deleteclasssection',['id' => $section->id])}}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </table>

      

    </section>
  </div>
@endsection