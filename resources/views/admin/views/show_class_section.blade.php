@extends('admin.layouts.layout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
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