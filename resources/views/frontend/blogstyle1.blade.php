@extends('frontend.layout.app')

@push('title')
<title>Blog Style 1</title>
@endpush
@section('content')
<!-- breadcrumb start -->
<div class="breadcrumb_section overflow-hidden ptb-150">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 col-12 text-center">
                <h2>Blog Style 01</h2>
                <ul>
                    <li><a href="{{route('home1')}}">Home</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!--our news start -->
<section class="news gray_bg ptb-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 ">
                <div class="news_content_item">
                    <div class="news_img ">
                        <img src="{{ asset('frontend/images/n1.jpg') }}" alt="">
                        <a href="{{ asset('frontend/images/n1.jpg') }}" data-fancybox=""><i
                                class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="news_content">
                        <div class="meta d-flex gap-4">
                            <span><i class="fa-regular fa-clock"></i> 18 Feb, 2022</span>
                            <span><i class="fa-solid fa-comments"></i> 3 Comments</span>
                        </div>
                        <a href="{{route('blogdetails')}}">
                            <h5>Donation is hope for poor helpless children</h5>
                        </a>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, magni eos
                            qui ratione voluptatem</p>
                        <a href="{{route('blogdetails')}}">Read More <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 ">
                <div class="news_content_item">
                    <div class="news_img ">
                        <img src="{{ asset('frontend/images/n2.jpg') }}" alt="">
                        <a href="{{ asset('frontend/images/n2.jpg') }}" data-fancybox=""><i
                                class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="news_content">
                        <div class="meta d-flex gap-4">
                            <span><i class="fa-regular fa-clock"></i> 18 Feb, 2022</span>
                            <span><i class="fa-solid fa-comments"></i> 3 Comments</span>
                        </div>
                        <a href="{{route('blogdetails')}}">
                            <h5>Don't Do This Activitiy After You Donating Your Blood</h5>
                        </a>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, magni eos
                            qui ratione voluptatem</p>
                        <a href="{{route('blogdetails')}}">Read More <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                <div class="news_content_item">
                    <div class="news_img ">
                        <img src="{{ asset('frontend/images/n3.jpg') }}" alt="">
                        <a href="{{ asset('frontend/images/n3.jpg') }}" data-fancybox=""><i
                                class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="news_content">
                        <div class="meta d-flex gap-4">
                            <span><i class="fa-regular fa-clock"></i> 18 Feb, 2022</span>
                            <span><i class="fa-solid fa-comments"></i> 3 Comments</span>
                        </div>
                        <a href="{{route('blogdetails')}}">
                            <h5>Donation is hope for poor helpless children</h5>
                        </a>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, magni eos
                            qui ratione voluptatem</p>
                        <a href="{{route('blogdetails')}}">Read More <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 mb-xl-0 mb-lg-0">
                <div class="news_content_item">
                    <div class="news_img ">
                        <img src="{{ asset('frontend/images/n1.jpg') }}" alt="">
                        <a href="{{ asset('frontend/images/n1.jpg') }}" data-fancybox=""><i
                                class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="news_content">
                        <div class="meta d-flex gap-4">
                            <span><i class="fa-regular fa-clock"></i> 18 Feb, 2022</span>
                            <span><i class="fa-solid fa-comments"></i> 3 Comments</span>
                        </div>
                        <a href="{{route('blogdetails')}}">
                            <h5>Don't Do This Activitiy After You Donating Your Blood</h5>
                        </a>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, magni eos
                            qui ratione voluptatem</p>
                        <a href="{{route('blogdetails')}}">Read More <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 mb-xl-0 mb-lg-0">
                <div class="news_content_item">
                    <div class="news_img ">
                        <img src="{{ asset('frontend/images/n2.jpg') }}" alt="">
                        <a href="{{ asset('frontend/images/n2.jpg') }}" data-fancybox=""><i
                                class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="news_content">
                        <div class="meta d-flex gap-4">
                            <span><i class="fa-regular fa-clock"></i> 18 Feb, 2022</span>
                            <span><i class="fa-solid fa-comments"></i> 3 Comments</span>
                        </div>
                        <a href="{{route('blogdetails')}}">
                            <h5>Donation is hope for poor helpless children</h5>
                        </a>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, magni eos
                            qui ratione voluptatem</p>
                        <a href="{{route('blogdetails')}}">Read More <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="news_content_item">
                    <div class="news_img ">
                        <img src="{{ asset('frontend/images/n3.jpg') }}" alt="">
                        <a href="{{ asset('frontend/images/n3.jpg') }}" data-fancybox=""><i
                                class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="news_content">
                        <div class="meta d-flex gap-4">
                            <span><i class="fa-regular fa-clock"></i> 18 Feb, 2022</span>
                            <span><i class="fa-solid fa-comments"></i> 3 Comments</span>
                        </div>
                        <a href="{{route('blogdetails')}}">
                            <h5>Don't Do This Activitiy After You Donating Your Blood</h5>
                        </a>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, magni eos
                            qui ratione voluptatem</p>
                        <a href="{{route('blogdetails')}}">Read More <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5">
                <div class="page_pagination">
                    <ul>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa-solid fa-angles-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--our news end -->

@endsection
