
@extends('admin.layouts.layout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
 
      <h1>
        Add Student
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Student</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            @if(session('success'))
              <div class="col-lg-12">
                <div class="alert alert-success">
                  {{session('success')}}
                </div>
              </div>
              <br>
            @endif

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
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id = "frm-add-class" method = "POST" action="{{route('savestudent')}}">
              @csrf
              <div class="box-body">
              <div class="form-group">
                    <label for="reg_no">Registration #</label>
                    <input type="number" class="form-control" id="reg_no" name = "reg_no" placeholder="Enter Registration #">
              </div>


                <div class="form-group">
                  <label for="student_name">Name</label>
                  <input type="text" class="form-control" id="student_name" name = "student_name" placeholder="Enter student name">
                </div>
                
                <div class="form-group">
                  <label for="student_father_name">Father Name</label>
                  <input type="text" class="form-control" id="student_father_name" name = "student_father_name" placeholder="Enter Father's name">
                </div>
                
                <div class="form-group">
                  <label for="student_mother_name">Mother Name</label>
                  <input type="text" class="form-control" id="student_mother_name" name = "student_mother_name" placeholder="Enter Mother's name">
                </div>

                <div class="form-group">
                  <label for="student_age">Student Age</label>
                  <input type="number" min = "1" class="form-control" id="student_age" name = "student_age" placeholder="Enter student age">
                </div>

                <div class="form-group">
                  <label for="student_roll_no">Roll #</label>
                  <input type="number" min = "1" class="form-control" id="student_roll_no" name = "student_roll_no" placeholder="Enter student roll #">
                </div>
 
                <div class="form-group">
                  <label for="student_email">Email</label>
                  <input type="email" min = "1" class="form-control" id="student_email" name = "student_email" placeholder="Enter student email">
                </div>

                <div class="form-group">
                  <label for="student_phone_no">Phone #</label>
                  <input type="number" min = "1" class="form-control" id="student_phone_no" name = "student_phone_no" placeholder="Enter student  phone #">
                </div>

                <div class="form-group">
                    <label for="student_gender">Choose Gender</label>
                    <select class = "form-control" name="student_gender" id="student_gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>

                    </select>
                </div>

                <div class="form-group">
                  <label for="student_photo">Profile Photo</label>
                  <input type="file" min = "1" class="form-control" id=student_photo" name = "student_photo">
                </div>
                <div class="form-group">
                    <label for="student_address">Address</label>
                    <textarea name="student_address" id="student_address" placeholder = "Enter student address" class = "form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="student_status">Status</label>
                    <select class = "form-control" name="student_status" id="student_status">
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