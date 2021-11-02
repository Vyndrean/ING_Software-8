<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eVote Junta de Vecinos</title>
  @yield('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  @include('layouts/navbar')
  
  @include('layouts/sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  @yield('content')
</div>
<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
@yield ('js')
</body>
</html>