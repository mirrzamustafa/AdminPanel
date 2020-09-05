
@extends('admin.layouts.layout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Faculty Member
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Edit Faculty Member</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
          
            @if($errors->any())
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="alert alert-danger">
                      <strong>WHOOPS!</strong> There were some problems with your input.<br/><br/>
                      <ul>
                          @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                          @endforeach
                      </ul>
                    </div>
                </div>
                <br>
            @endif

            <form role="form" id = "frm-add-class"  action="{{route('updatefacultymember',['id' => $details->id])}}"  method="post" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
              <div class="form-group">
                    <label for="dd_type">Choose Type</label>
                    <select class = "form-control" name="dd_type" id="dd_type">
                      @if(sizeOf($faculty_type) == 0)
                        <option value="">Enlist faculty types first</option>
                      @else
                        @foreach($faculty_type as $type)
                           <option value="{{$type->faculty_type}}">{{$type->faculty_type}}</option>
                        @endforeach
                      @endif
                    </select>
                </div>


                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="faculty_mem_name" name = "name" value = "{{$details->name}}" placeholder="Enter full name">
                </div>
                
             

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" min = "1" class="form-control" id="faculty_email" name = "email"value = "{{$details->email}}" placeholder="Enter email">
                </div>

               
                <div class="form-group">
                  <label for="faculty_mem_phone_no">Phone #</label>
                  <input type="number" min = "1" class="form-control" id="faculty_mem_phone_no" name = "faculty_mem_phone_no" value = "{{$details->phone_no}}" placeholder="Enter phone #">
                </div>

                <div class="form-group">
                    <label for="dd_gender">Choose Gender</label>
                    <select class = "form-control" name="gender" id="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>

                    </select>
                </div>

                <div class="form-group">
                  <label for="faculty_mem_picture">Profile Photo</label>
                  <input type="file"  class="form-control" id="faculty_mem_picture" name = "faculty_mem_picture">
                </div>

                <div class="form-group">
                    <label for="faculty_mem_address">Address</label>
                    <textarea name="faculty_mem_address" id="faculty_mem_address" placeholder = "Enter address" class = "form-control">{{$details->address}}</textarea>
                </div>
                <div class="form-group">
                    <label for="dd_status">Status</label>
                    <select class = "form-control" name="status" id="status">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        </div>
          

    </section>
    <!-- /.content -->
  </div>
@endsection