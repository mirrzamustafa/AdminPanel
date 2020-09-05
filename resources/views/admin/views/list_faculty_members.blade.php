@extends('admin.layouts.layout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Faculty Members
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">List Faculty Members</li>
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
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

            @foreach($faculty as $member)
                <tr>
                    <td>{{$member->name}}</td>
                    <td>{{$member->email}}</td>
                    <td>{{$member->gender}}</td>
                    <td>{{$member->status}}</td>
                    <td>
                      <a href = "{{route('showfacultymember',['id' => $member->id])}}"class = "btn btn-info" >Show</a>
                       <a href = "{{route( 'editfacultymember' , ['id' => $member->id] )}}" class = "btn btn-primary" >Edit</a>
                        <a href = "{{route('deletefacultymember',['id' => $member->id])}}" class = "btn btn-danger"  >Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </section>
  </div>
@endsection