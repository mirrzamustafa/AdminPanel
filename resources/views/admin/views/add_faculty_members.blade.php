
@extends('admin.layouts.layout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Faculty Member
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Faculty Member</li>
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

            <form role="form" id = "frm-add-class" method = "" action="">
              <div class="box-body">
              <div class="form-group">
                    <label for="dd_type">Choose Type</label>
                    <select class = "form-control" name="dd_type" id="dd_type">
                        <option value="1">Teaching</option>
                        <option value="2">Non Teaching</option>
                        <option value="3">Labs Faculty</option>

                    </select>
                </div>


                <div class="form-group">
                  <label for="faculty_mem_name">Name</label>
                  <input type="text" class="form-control" id="faculty_mem_name" name = "faculty_mem_name" value = "{{old('faculty_mem_name')}}" placeholder="Enter faculty member name">
                </div>
                
             

                <div class="form-group">
                  <label for="faculty_email">Email</label>
                  <input type="email" min = "1" class="form-control" id="faculty_email" name = "faculty_email" value = "{{old('faculty_email')}}" placeholder="Enter faculty member's email">
                </div>

                <div class="form-group">
                  <label for="faculty_mem_designation">Designation</label>
                  <input type="text" min = "1" class="form-control" id="faculty_mem_designation" name = "faculty_mem_designation" value = "{{old('faculty_mem_designation')}}" placeholder="Enter faculty member's designation">
                </div>

                <div class="form-group">
                  <label for="faculty_mem_phone_no">Phone #</label>
                  <input type="number" min = "1" class="form-control" id="faculty_mem_phone_no" name = "faculty_mem_phone_no" value = "{{old('faculty_mem_phone_no')}}" placeholder="Enter faculty member's phone #">
                </div>

                <div class="form-group">
                    <label for="dd_gender">Choose Gender</label>
                    <select class = "form-control" name="dd_gender" id="dd_gender">
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="3">Other</option>

                    </select>
                </div>

                <div class="form-group">
                  <label for="faculty_mem_photo">Profile Photo</label>
                  <input type="file" min = "1" class="form-control" id="faculty_mem_photo" value = "{{old('faculty_mem_photo')}}" name = "faculty_mem_photo">
                </div>
                <div class="form-group">
                    <label for="faculty_mem_address">Address</label>
                    <textarea name="faculty_mem_address" id="faculty_mem_address" value = "{{old('faculty_mem_address')}}" placeholder = "Enter address" class = "form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="dd_status">Status</label>
                    <select class = "form-control" name="dd_status" id="dd_status">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
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