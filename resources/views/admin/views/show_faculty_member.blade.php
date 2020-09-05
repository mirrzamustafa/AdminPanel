@extends('admin.layouts.layout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Show Faculty Member
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('listfacultymembers')}}"> List Faculty Members</a></li>
        <li class="active">Show Faculty Members</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <ul style = "list-style:none">
            <li> <img style = "border-radius:50%;width:150px;height:150px;" src="{{asset('uploads/faculty_pictures/' . $details->profile_photo)}}" alt="No Preview"></li>
            <li> <strong>Name : </strong> {{$details->name}}</li>
            <li> <strong>Email : </strong> {{$details->email}}</li>
            <li> <strong>Phone # </strong> {{$details->phone_no}}</li>
            <li> <strong>Gender : </strong> {{$details->gender}}</li>
            <li> <strong>Address : </strong> {{$details->address}}</li>
            <li> <strong>Status : </strong> {{$details->status}}</li>
            <li> <strong>Faculty Type : </strong> {{$details->faculty_type}}</li>
        </ul>
    </section>
  </div>
@endsection