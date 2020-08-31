
@extends('admin.layouts.layout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Section
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Class</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id = "frm-add-class" method = "" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="class_name">Class name</label>
                  <input type="text" class="form-control" id="class_name" name = "class_name" placeholder="Enter class name">
                </div>
                
                <div class="form-group">
                    <label for="dd_section">Choose Section</label>
                    <select class = "form-control" name="dd_section" id="dd_section">
                        <option value="1">A</option>
                        <option value="2">B</option>
                        <option value="3">C</option>

                    </select>
                </div>

                <div class="form-group">
                  <label for="seats_available">Seats Available</label>
                  <input type="number" min = "1" class="form-control" id="seats_available" name = "seats_available" placeholder="Enter seats">
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