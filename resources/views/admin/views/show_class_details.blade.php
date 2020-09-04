@extends('admin.layouts.layout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Show Class
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('listclasses')}}"> List Sections</a></li>
        <li class="active">Show Class</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <ul>
            <li> <strong>Name :</strong> {{$class->class_name}}</li>
            <li> <strong>Section :</strong> {{$class->class_section_id}}</li>
            <li> <strong>Seats Available :</strong> {{$class->seats_available}}</li>
            <li> <strong>Status :</strong> {{$class->status}}</li>

        </ul>
      

    </section>
  </div>
@endsection