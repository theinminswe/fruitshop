<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Fruit Shop</title>
    <link rel="stylesheet" href="{{url('/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

    <!-- Bootstrap core CSS -->
    <link href="{{ url('/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ url('/css/thien.css')}} ">

  </head>
  <body>
@include('partials.header')

@yield('content')


<script src="{{url('/js/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{url('/js/bootstrap.min.js')}}"></script> 
<script src="{{url('/js/bootstrap.js')}}"></script> 
 <script src="{{url('/js/bootstrap.bundle.min.js')}}"></script> 
@yield('js')

@include('partials.footer')
</body>
</html>
