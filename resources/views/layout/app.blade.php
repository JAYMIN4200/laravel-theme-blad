<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from innovativeartisan.com/demo/html/blad-ai/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jul 2024 07:15:36 GMT -->
<head>
  <!-- Required Meta Tags -->
  <meta charset="UTF-8">
  @stack('title')
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  {{-- <!-- Page Title -->
  <title>Blad Ai - Blood Donation</title> --}}

  <!-- Favicon Icon -->
  <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}">
  <!-- CSS Files -->
  <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/fancybox.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  <link rel="icon" href="{{ asset('frontend/images/favicon.html') }}">
</head>


<body>

  <!--preloader start-->
  <div class="preloader">
    <h1>Blad Ai</h1>
    <div class="preload-progress">
      <span></span>
    </div>
  </div>
  <!--preloader end-->


     <!-- START: Header -->
     @include('layout.top')

     <section class="content">
        @yield('content')
     </section>

     @include('layout.footer')
     <!-- END: Header -->

        <!-- Javascript Files -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/js/fancybox.js') }}"></script>
    <script src="{{ asset('frontend/js/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/progress-bar.js') }}"></script>
    <script src="{{ asset('frontend/js/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('frontend/js/nice-select.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoints.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>

    </body>
  </header>
  <!-- header end -->
