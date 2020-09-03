@extends('admin.layouts.layout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Show Section
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('listclasssections')}}"> List Sections</a></li>
        <li class="active">Show Section</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <ul>
            <li> <strong>Name :</strong> {{$section->section_name}}</li>
            <li> <strong>Status :</strong> {{$section->status}}</li>
        </ul>
      

    </section>
  </div>
@endsection