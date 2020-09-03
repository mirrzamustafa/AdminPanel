
@extends('admin.layouts.layout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Faculty Type
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('listfacultytypes')}}"> List Faculty Types</a></li>
        <li class="active">Edit Faculty Type</li>
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

        
            <!-- form start -->
            <form role="form" id = "frm-add-faculty-type" method = "POST" action="{{route('updatefacultytypes',['id' => $details->id])}}">
               @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="section_name">Faculty Type</label>
                  <input type="text" class="form-control" id="faculty_type" name = "faculty_type" value = "{{$details->faculty_type}}" placeholder="Enter Faculty Type">
                </div>
                <div class="form-group">
                    <label for="dd_status">Status</label>
                    <select class = "form-control" name="dd_status" id="dd_status">
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