
@extends('admin.layouts.layout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Section
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
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

            @if($errors->any())
                  <div class="col-lg-12 ">
                    <div class="alert alert-danger">
                    <strong>WHOOPS!</strong> There were some problems with your input.<br/><br/>

                      <ul>
                          @foreach($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                          @endforeach
                      </ul>
                    </div>
                  </div>
            @endif

            <form role="form" id = "frm-add-class" method = "POST" action="{{route('saveclasses')}}">
             @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="class_name">Class name</label>
                  <input type="text" class="form-control" id="class_name" name = "class_name" value = "{{ old('class_name') }}" placeholder="Enter class name">
                </div>
                
                <div class="form-group">
                    <label for="dd_section">Choose Section</label>
                    <select class = "form-control" name="section" id="dd_section" >
                        @foreach($sections as $section)
                           <option value = "{{$section->section_name}}" > {{ $section->section_name }} </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                  <label for="seats_available">Seats Available</label>
                  <input type="number" min = "1" class="form-control" id="seats_available" value = "{{ old('seats_available') }}" name = "seats_available" placeholder="Enter seats">
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