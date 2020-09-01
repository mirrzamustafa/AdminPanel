<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  {{-- styles --}}
   @include('admin.layouts.styles')
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  {{-- header --}}
  @include('admin.layouts.header')
  <!-- Left side column. contains the logo and sidebar -->
  {{-- Left side column --}}
  @include('admin.layouts.leftsidebar')

  <!-- Content Wrapper. Contains page content -->
  {{--dynamic content--}}  
  @section('content')
  @show



</div>

@include('admin.layouts.scripts')

</body>
</html>
