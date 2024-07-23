@extends('frontend.layout.app')

@push('title')
<title>Photo Gallery</title>
@endpush
@section('content')


  <!-- breadcrumb start -->
  <div class="breadcrumb_section overflow-hidden ptb-150">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 col-12 text-center">
          <h2>Photo Gallery</h2>
          <ul>
            <li><a href="{{route('home1')}}">Home</a></li>
            <li class="active">Gallery</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- breadcrumb end -->

  <!-- gallery start -->
  <section class="gallery3 ptb-115 ">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 ">
          <div class="common_title text-center">
            <p>Gallary</p>
            <h2>Our Best Campaign Gallery</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
          <div class="gallary_item">
            <img src="{{ asset('frontend/images/h2_g1.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/h2_g1.jpg') }}" data-fancybox="gallery"><i class="fa-solid fa-plus"></i></a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
          <div class="gallary_item">
            <img src="{{ asset('frontend/images/h2_g2.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/h2_g2.jpg') }}" data-fancybox="gallery"><i class="fa-solid fa-plus"></i></a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
          <div class="gallary_item">
            <img src="{{ asset('frontend/images/h2_g3.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/h2_g3.jpg') }}" data-fancybox="gallery"><i class="fa-solid fa-plus"></i></a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
          <div class="gallary_item">
            <img src="{{ asset('frontend/images/g1.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/g1.jpg') }}" data-fancybox="gallery"><i class="fa-solid fa-plus"></i></a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
          <div class="gallary_item">
            <img src="{{ asset('frontend/images/g2.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/g2.jpg') }}" data-fancybox="gallery"><i class="fa-solid fa-plus"></i></a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
          <div class="gallary_item">
            <img src="{{ asset('frontend/images/g3.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/g3.jpg') }}" data-fancybox="gallery"><i class="fa-solid fa-plus"></i></a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-4 mb-xl-0 mb-lg-0 mb-md-0">
          <div class="gallary_item">
            <img src="{{ asset('frontend/images/h2_g1.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/h2_g1.jpg') }}" data-fancybox="gallery"><i class="fa-solid fa-plus"></i></a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-4 mb-xl-0 mb-lg-0 mb-md-0">
          <div class="gallary_item">
            <img src="{{ asset('frontend/images/h2_g2.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/h2_g2.jpg') }}" data-fancybox="gallery"><i class="fa-solid fa-plus"></i></a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
          <div class="gallary_item">
            <img src="{{ asset('frontend/images/h2_g3.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/h2_g3.jpg') }}" data-fancybox="gallery"><i class="fa-solid fa-plus"></i></a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- gallery end -->



@endsection
