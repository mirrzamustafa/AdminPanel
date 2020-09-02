@extends('admin.layouts.layout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Faculty type details
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li href="{{route('listfacultytypes')}}">List Faculty Types</li>
        <li class="active">Faculty Type Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <ul>
            <li> <strong>Type : </strong>{{$details->faculty_type}}</li>
            <li> <strong>Status : </strong>{{$details->dd_status}}</li>

        </ul>
    </section>
  </div>
@endsection