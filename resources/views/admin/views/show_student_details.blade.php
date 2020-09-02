@extends('admin.layouts.layout')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('liststudents')}}"> List Students</a></li>
        <li class="active">Show Details</li>
      </ol>
    </section>


    <section class="content">

          <ul style = "list-style:none">
              <li> <strong>Profile Picture :</strong>  </li><br>
              <img style = "border-radius:50%;width:150px;height:150px;" src="{{asset('uploads/profile_pictures/' . $student->student_photo)}}" alt="image">
              <li><br><strong>Registration no :</strong>  {{ $student->reg_no}}</li>
              <li> <strong>Name :</strong> {{$student->student_name}}</li>
              <li> <strong>Father Name :</strong> {{$student->student_father_name}}</li>
              <li> <strong>Mother Name :</strong> {{$student->student_mother_name}}</li>
              <li> <strong>Student Age :</strong> {{$student->student_age}}</li>
              <li> <strong>Roll no :</strong> {{$student->student_roll_no}}</li>
              <li> <strong>Email :</strong> {{$student->student_email}}</li>
              <li> <strong>Phone no :</strong> {{$student->student_phone_no}}</li>
              <li> <strong>Gender :</strong> {{$student->student_gender}}</li>
              <li> <strong>Address :</strong> {{$student->student_address}}</li>
              <li> <strong>Status :</strong> {{$student->student_status}}</li>
          </ul>
   

    </section>
  </div>
@endsection