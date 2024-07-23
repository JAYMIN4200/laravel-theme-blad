@extends('frontend.layout.app')

@push('title')
<title>Home 3</title>
@endpush
@section('content')
<!-- hero section start -->
<section class="hm1_hero_slider hm2_hero_slider">
    <div class="hm1_hero hm3_hero hm31 hm_bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="hm2_content text-center">
              <h4>Donate to blood contribute</h4>
              <h2>Your Blood Can Bring Smile
                In Any One Person Face</h2>
              <a href="{{route('donate')}}"class="explore_now red_btn">Get Started</a>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="hm1_hero hm3_hero hm32 hm_bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="hm2_content text-center">
              <h4>Donate to blood contribute</h4>
              <h2>Your Blood Can Bring Smile
                In Any One Person Face</h2>
              <a href="{{route('donate')}}"class="explore_now red_btn">Get Started</a>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="hm1_hero hm3_hero hm33 hm_bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="hm2_content text-center">
              <h4>Donate to blood contribute</h4>
              <h2>Your Blood Can Bring Smile
                In Any One Person Face</h2>
              <a href="{{route('donate')}}"class="explore_now red_btn">Get Started</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- hero section end -->

  <!-- register & donate start -->
  <section class="register_donate3  gray_bg ptb-115 pb-200">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-5 mb-xl-0 mb-lg-0">
          <div class="register_donate_item2">
            <h2>01.</h2>
            <h5>Become a Donar</h5>
            <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because pain, but
              because
              occasionally</p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-5 mb-xl-0 mb-lg-0">
          <div class="register_donate_item2">
            <h2>02.</h2>
            <h5>Why Give Blood?</h5>
            <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because pain, but
              because
              occasionally</p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="register_donate_item2">
            <h2>03.</h2>
            <h5>How Donations Helps</h5>
            <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because pain, but
              because
              occasionally</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- register & donate end -->

  <!-- register & donate start -->
  <section class="register_donate ptb-115 ">
    <div class="container">
      <div class="row g-0 register_top">
        <div class="col-xl-6 col-lg-6 col-12">
          <a href="{{route('register')}}">
            <div class="register black_bg  red_hover">
              <div class="register_content">
                <h4>Register Now</h4>
                <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is
                  pain,
                </p>
              </div>
              <div class="register_icon">
                <a href="{{route('register')}}"><i class="fa-solid fa-arrow-right-to-bracket"></i></a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-6 col-lg-6  col-12">
          <a href="{{route('donate')}}">
            <div class="register red_bg black_hover">
              <div class="register_content">
                <h4>Donate Now</h4>
                <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is
                  pain,
                </p>
              </div>
              <div class="register_icon">
                <a href="{{route('donate')}}"><i class="fa-solid fa-arrow-right-to-bracket"></i></a>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row align-items-center g-lg-5 g-xl-5 g-xxl-5">
        <div class="col-xl-6 col-lg-6 col-md-6  col-12 mb-5 mb-xl-0 mb-lg-0 mb-md-0 ">
          <div class="help_wrap position-relative">
            <img src="{{ asset('frontend/images/a2.png') }}" class="help_3" alt="">
            <img src="{{ asset('frontend/images/a2.jpg') }}" class="help_4" alt="">
            <img src="{{ asset('frontend/images/help2.png') }}" alt="" class="help_over">
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6  col-12">
          <div class="help_content">
            <p class="red_color">Help The People in Need</p>
            <h2>Welcome to Blood
              Donors Organization</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et
              dolore magna aliqua.
              suspendisse the gravida. Risus commodo viverra maecenas</p>
            <div class="d-flex justify-content-between">
              <ul>
                <li><i class="fa-solid fa-angles-right"></i> Good Service</li>
                <li><i class="fa-solid fa-angles-right"></i> Help People</li>
                <li><i class="fa-solid fa-angles-right"></i> Hugine Tools</li>
              </ul>
              <ul>
                <li><i class="fa-solid fa-angles-right"></i> 24h Service</li>
                <li><i class="fa-solid fa-angles-right"></i> Health Check</li>
                <li><i class="fa-solid fa-angles-right"></i> Blood Bank</li>
              </ul>
            </div>
            <a href="{{route('aboutus')}}" class="explore_now red_btn">Explore Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- register & donate end -->

  <!-- counter start -->
  <div class="km__counterup___section">
    <div class="container">
      <div class="row g-4 justify-content-center">
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-4 mb-xl-0 mb-lg-0 mb-md-0">
          <ul class="km__counterup___box text-center">
            <li class="h1 counter mb-30"><span class="count">25</span></li>
            <li class="counter__content">Years of Experience</li>
          </ul>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-4 mb-xl-0 mb-lg-0 mb-md-0">
          <ul class="km__counterup___box text-center">
            <li class="h1 counter mb-30"><span class="count">430</span></li>
            <li class="counter__content">Blood Donations</li>
          </ul>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-4 mb-xl-0 mb-lg-0 mb-md-0">
          <ul class="km__counterup___box text-center">
            <li class="h1 counter mb-30"><span class="count">90</span></li>
            <li class="counter__content">Total Awards</li>
          </ul>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
          <ul class="km__counterup___box text-center">
            <li class="h1 counter mb-30"><span class="count">35</span></li>
            <li class="counter__content">Blood Cooperations</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- counter end -->

  <!-- service start -->
  <section class="register_donate gray_bg ptb-115">
    <div class="container">
      <div class="row mb-5 ">
        <div class="col-12">
          <div class="common_title text-center">
            <p>services</p>
            <h2>our best services</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
          <div class="register_donate_item">
            <div class="donate_item_top">
              <div class="donate_img">
                <img src="{{ asset('frontend/images/r1.jpg') }}" alt="">
              </div>
              <div class="donate_content text-center">
                <span><img src="{{ asset('frontend/images/icon/d1.png') }}" alt=""></span>
                <a href="{{route('servicedetails')}}">
                  <h5>Become a donate</h5>
                </a>
                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                  born and I will give</p>
              </div>
            </div>
            <a href="{{route('servicedetails')}}" class="d-block black_bg text-center">Read More</a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
          <div class="register_donate_item">
            <div class="donate_item_top">
              <div class="donate_img">
                <img src="{{ asset('frontend/images/r2.jpg') }}" alt="">
              </div>
              <div class="donate_content text-center">
                <span><img src="{{ asset('frontend/images/icon/d2.png') }}" alt=""></span>
                <a href="{{route('servicedetails')}}">
                  <h5>Why give blood?</h5>
                </a>
                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                  born and I will give</p>
              </div>
            </div>
            <a href="{{route('servicedetails')}}" class="d-block black_bg text-center">Read More</a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="register_donate_item">
            <div class="donate_item_top">
              <div class="donate_img">
                <img src="{{ asset('frontend/images/r3.jpg') }}" alt="">
              </div>
              <div class="donate_content text-center">
                <span><img src="{{ asset('frontend/images/icon/d3.png') }}" alt=""></span>
                <a href="{{route('servicedetails')}}">
                  <h5>How Denations Help?</h5>
                </a>
                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                  born and I will give</p>
              </div>
            </div>
            <a href="{{route('servicedetails')}}" class="d-block black_bg text-center">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- service end -->

  <!-- what do start -->
  <section class="whatdo ptb-115">
    <div class="container">
      <div class="row mb-5 ">
        <div class="col-12">
          <div class="common_title text-center">
            <p>what we do</p>
            <h2>Donation Process</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="what_progress">
            <ul>
              <img src="{{ asset('frontend/images/p_line.png') }}" class="progress_line" alt="">
              <li>
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-7 col-sm-9 col-12">
                    <div class="progress_content d-flex align-items-center gap-xl-5 gap-lg-5 gap-md-4 gap-sm-3 gap-3">
                      <div class="p_content_left">
                        <h5>Registration</h5>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                          consequuntur</p>
                      </div>
                      <span class="progress_number">01</span>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row justify-content-end">
                  <div class="col-xl-6 col-lg-6 col-md-7 col-sm-9 col-12">
                    <div class="progress_content d-flex align-items-center gap-xl-5 gap-lg-5 gap-md-4 gap-sm-3 gap-3">
                      <span class="progress_number">02</span>
                      <div class="p_content_left p_content_right">
                        <h5>Screening Test</h5>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                          consequuntur</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-7 col-sm-9 col-12">
                    <div class="progress_content d-flex align-items-center gap-xl-5 gap-lg-5 gap-md-4 gap-sm-3 gap-3">
                      <div class="p_content_left">
                        <h5>Donation</h5>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                          consequuntur</p>
                      </div>
                      <span class="progress_number">03</span>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row justify-content-end">
                  <div class="col-xl-6 col-lg-6 col-md-7 col-sm-9 col-12">
                    <div class="progress_content d-flex align-items-center gap-xl-5 gap-lg-5 gap-md-4 gap-sm-3 gap-3">
                      <span class="progress_number">04</span>
                      <div class="p_content_left p_content_right">
                        <h5>Rest & Refresh</h5>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                          consequuntur</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- what do end -->

  <!-- call now start -->
  <section class="hm1_counter call_now">
    <div class="container">
      <div class="row">
        <div class="col-12 ">
          <div class="call_content text-center">
            <span class="call_over"><i class="fa-solid fa-phone"></i></span>
            <p>START DONATING</p>
            <a href="tell:3335559090">
              <h2>Call Now: <span>333 555 9090</span></h2>
            </a>
            <ul class="d-flex gap-4 justify-content-center flex-wrap">
              <li>
                <span><i class="fa-solid fa-location-dot"></i></span>
                <span>New York - 1075 Firs Avenue</span>
              </li>
              <li>
                <span><i class="fa-solid fa-envelope"></i></span>
                <a href="mailto:company@domin.com">Donate@gmail.com</a>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- call now end -->

  <!-- campaigns section start -->
  <section class="km__campaigns ptb-115">
    <div class="container">
      <div class="row mb-5 ">
        <div class="col-12">
          <div class="common_title text-center">
            <p>Donate Now</p>
            <h2>Popular Campaigns</h2>
          </div>
        </div>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-xl-6 col-lg-6 col-12">
          <div class="km__service position-relative">
            <div class="feature-image  img mb-30">
              <a href="{{route('campaigndetails')}}">
                <img class="w-100" src="{{ asset('frontend/images/about/service.jpg') }}" alt="images not found">
              </a>
              <span class="data-tags d-flex justify-content-center align-items-center">
                <b>13</b>
                feb
              </span>
            </div>
            <div class="km__post__content">
              <a href="{{route('campaigndetails')}}">
                <h4 class="mb-30">Blood Group Collection</h4>
              </a>
              <p class="mb-30">Lorem ipsum dolor sit consectetur adipiscing elit, sed do incididunt et dolore magna
                aliqua.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="km__service">
            <div class="feature-image img mb-30">
              <a href="{{route('campaigndetails')}}">
                <img class="w-100" src="{{ asset('frontend/images/about/service-2.jpg') }}" alt="images not found">
              </a>
            </div>
            <div class="km__post__content">
              <span class="mb-30 d-inline-block">
                <i class="fas fa-calendar-days"></i>
                13 February, 2022
              </span>
              <a href="{{route('campaigndetails')}}">
                <h6 class="mb-30">Free Group Checking</h6>
              </a>
              <p class="mb-0">Lorem ipsum dolor sit consectetur adipiscing elit, sed do incididunt et dolore magna
                aliqua.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="km__service">
            <div class="feature-image img mb-30">
              <a href="{{route('campaigndetails')}}">
                <img class="w-100" src="{{ asset('frontend/images/about/service-3.jpg') }}" alt="images not found">
              </a>
            </div>
            <div class="km__post__content">
              <span class="mb-30 d-inline-block">
                <i class="fas fa-calendar-days"></i>
                13 February, 2022
              </span>
              <a href="{{route('campaigndetails')}}">
                <h6 class="mb-30">Blood Donation Camp</h6>
              </a>
              <p class="mb-0">Lorem ipsum dolor sit consectetur adipiscing elit, sed do incididunt et dolore magna
                aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- campaigns section ends -->

  <!-- Testimonials section start -->
  <section class="km__testimonials__section ptb-115">
    <div class="container">
      <div class="row mb-5 ">
        <div class="col-12">
          <div class="common_title text-center">
            <p>Testimonials</p>
            <h2>What Our Clients Say</h2>
          </div>
        </div>
      </div>

      <div class="testimonials__slider">
        <div class="slide__items">
          <div class="km_testimonials__bx text-center">
            <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-6 col-md-7 col-sm-8 col-10">
                <div class="km__testimonial__content">
                  <span>
                    "
                  </span>
                  <h4 class="text-white mb-30">Professional services all the way</h4>
                  <p class="text-white mb-30"> These cases are perfectly simple and easy to distinguish. In a free hour,
                    when our power of choice is untrammelled and when nothing prevents our being able to do what we like
                    best, every pleasure is to be welcomed and every pain avoided. </p>
                </div>
                <div class="user mt-30">
                  <img src="{{ asset('frontend/images/about/user.png') }}" alt="images not found">
                  <h6 class="mt-30 text-white">Jhon Alexis <span>Marketing Staff</span></h6>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="slide__items">
          <div class="km_testimonials__bx text-center">
            <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-6 col-md-7 col-sm-8 col-10">
                <div class="km__testimonial__content">
                  <span>
                    "
                  </span>
                  <h4 class="text-white mb-30">Professional services all the way</h4>
                  <p class="text-white mb-30"> These cases are perfectly simple and easy to distinguish. In a free hour,
                    when our power of choice is untrammelled and when nothing prevents our being able to do what we like
                    best, every pleasure is to be welcomed and every pain avoided. </p>
                </div>
                <div class="user mt-30">
                  <img src="{{ asset('frontend/images/about/user.png') }}" alt="images not found">
                  <h6 class="mt-30 text-white">Jhon Alexis <span>Marketing Staff</span></h6>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonials section ends -->

  <!-- blood doner start -->
  <section class="blood blood3 ptb-115">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-7 col-md-9 col-sm-11 col-12">
          <div class="common_title1 text-center">
            <p>blood owner</p>
            <h2>We Are Blood Donor Group</h2>
            <span>When our power of choice is untrammelled and when nothing prevents our being able to do what we like
              best, every
              pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims
            </span>
            <a href="{{route('contacts')}}" class="explore_now red_btn">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- blood doner end -->

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
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-4 mb-xl-0 mb-lg-0 mb-md-0">
          <div class="gallary_item">
            <img src="{{ asset('frontend/images/g2.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/g2.jpg') }}" data-fancybox="gallery"><i class="fa-solid fa-plus"></i></a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
          <div class="gallary_item">
            <img src="{{ asset('frontend/images/g3.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/g3.jpg') }}" data-fancybox="gallery"><i class="fa-solid fa-plus"></i></a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- gallery end -->

  <!-- request & appoinment start -->
  <section class="request3 gray_bg ptb-115">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-xl-7 col-lg-8 col-md-10  col-12">
          <div class="common_title text-center">
            <p>registration</p>
            <h2>Your Donation Can Make Someone Life Better</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4 mb-xl-0 mb-lg-0">
          <div class="current2 ">
            <h4>Good To Know Blood Donate</h4>
            <div class="payment">

              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      How to donate on our site using your form?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                        maxime placeat facere
                        possimus, voluptas assumenda est, omnis dolor repellendus.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      How to donate on our site using your form?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                        maxime placeat facere
                        possimus, voluptas assumenda est, omnis dolor repellendus.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      How to donate on our site using your form?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                        maxime placeat facere
                        possimus, voluptas assumenda est, omnis dolor repellendus.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      How to donate on our site using your form?
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                        maxime placeat facere
                        possimus, voluptas assumenda est, omnis dolor repellendus.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      How to donate on our site using your form?
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                        maxime placeat facere
                        possimus, voluptas assumenda est, omnis dolor repellendus.</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
          <div class="appointment">
            <h4>Request Appointment Here</h4>

            <form action="#" class="row hm1_contact_form">
              <div class="col-xl-6 col-12 mb-4">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="col-xl-6 col-12 mb-4">
                <input type="text" class="form-control" placeholder="Phone Number">
              </div>
              <div class="col-12 mb-4">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="col-12 mb-4">
                <select class="form-select">
                  <option value="d">Donation Type</option>
                  <option value="d">Donation Type</option>
                  <option value="d">Donation Type</option>
                  <option value="d">Donation Type</option>
                </select>
              </div>
              <div class="col-12 mb-4">
                <textarea class="form-control">Your Message</textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="red_btn">Submit Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- request & appoinment end -->

  <!--our news start -->
  <section class="news ptb-115">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12">
          <div class="common_title text-center">
            <p>our news</p>
            <h2>Checkout News & Updates</h2>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 mb-xl-0 mb-lg-0">
          <div class="news_content_item">
            <div class="news_img ">
              <img src="{{ asset('frontend/images/n1.jpg') }}" alt="">
              <a href="#"><i class="fa-solid fa-plus"></i></a>
            </div>
            <div class="news_content">
              <div class="meta d-flex gap-4">
                <span><i class="fa-regular fa-clock"></i> 18 Feb, 2022</span>
                <span><i class="fa-solid fa-comments"></i> 3 Comments</span>
              </div>
              <a href="{{route('servicedetails')}}">
                <h5>Donation is hope for poor helpless children</h5>
              </a>
              <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, magni eos
                qui ratione voluptatem</p>
              <a href="{{route('servicedetails')}}">Read More <i class="fa-solid fa-angles-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 mb-xl-0 mb-lg-0">
          <div class="news_content_item">
            <div class="news_img ">
              <img src="{{ asset('frontend/images/n2.jpg') }}" alt="">
              <a href="#"><i class="fa-solid fa-plus"></i></a>
            </div>
            <div class="news_content">
              <div class="meta d-flex gap-4">
                <span><i class="fa-regular fa-clock"></i> 18 Feb, 2022</span>
                <span><i class="fa-solid fa-comments"></i> 3 Comments</span>
              </div>
              <a href="{{route('servicedetails')}}">
                <h5>Donation is hope for poor helpless children</h5>
              </a>
              <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, magni eos
                qui ratione voluptatem</p>
              <a href="{{route('servicedetails')}}">Read More <i class="fa-solid fa-angles-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="news_content_item">
            <div class="news_img ">
              <img src="{{ asset('frontend/images/n3.jpg') }}" alt="">
              <a href="#"><i class="fa-solid fa-plus"></i></a>
            </div>
            <div class="news_content">
              <div class="meta d-flex gap-4">
                <span><i class="fa-regular fa-clock"></i> 18 Feb, 2022</span>
                <span><i class="fa-solid fa-comments"></i> 3 Comments</span>
              </div>
              <a href="{{route('servicedetails')}}">
                <h5>Donation is hope for poor helpless children</h5>
              </a>
              <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, magni eos
                qui ratione voluptatem</p>
              <a href="{{route('servicedetails')}}">Read More <i class="fa-solid fa-angles-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--our news end -->
@endsection
