<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name', 'USKO Realty') }} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta-description')">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/dropzone.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    @yield('vendor-style')
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('assets/css/skins/red.css') }}">
    @yield('page-style')
</head>
<body id="top" class="index-body">
<div class="page_loader"></div>

@include('layouts.topHeader')

@include('layouts.mainHeader')

@include('layouts.sidebar')

@yield('banner')

@yield('content')

@include('layouts.footer')


<!-- External JS libraries -->
<script src="{{ asset('assets/js/jquery-2.2.0.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollUp.js') }}"></script>
<script src="{{ asset('assets/js/dropzone.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
@yield('vendor-script')
<script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- Custom JS Script -->
<script  src="{{ asset('assets/js/app.js') }}"></script>
@yield('page-script')
</body>
</html>