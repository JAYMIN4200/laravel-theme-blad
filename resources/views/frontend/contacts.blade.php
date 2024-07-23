@extends('frontend.layout.app')

@push('title')
<title>Contact Us</title>
@endpush
@section('content')
<!-- breadcrumb start -->
<div class="breadcrumb_section overflow-hidden ptb-150">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 col-12 text-center">
          <h2>Contact Us</h2>
          <ul>
            <li><a href="{{route('home1')}}">Home</a></li>
            <li class="active">Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- breadcrumb end -->
  <!-- message box start -->
  <section class="km__message__box ptb-120">
    <div class="container">
      <div class="km__contact__form">
        <div class="row g-5">
          <div class="col-xl-7">
            <div class="km__box__form">
              <h4 class="mb-40">Get In Touch</h4>
              <p class="mb-30">
                On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and
                demoralized by the charms
              </p>
              <form action="#" class="km__main__form">
                <div class="row">
                  <div class="col-sm">
                    <input type="text" placeholder="Frist Name">
                  </div>
                  <div class="col-sm">
                    <input type="text" placeholder="Last Name">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm">
                    <input type="email" placeholder="Email">
                  </div>
                  <div class="col">
                    <input type="text" placeholder="Subject">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm">
                    <textarea placeholder="Message" rows="3"></textarea>
                  </div>
                </div>
                <button type="submit" class="contact__btn">
                  Submit Request
                  <i class="fa-solid fa-angles-right"></i>
                </button>
              </form>
            </div>
          </div>
          <div class="col-xl-5">
            <div class="km__form__content">
              <span class="sub__title">Blood Excellence!</span>
              <h4 class="km__form__title">Expanded Blood Donate Services Here</h4>
              <p class="form_des">
                On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and
                demoralized by the charms
              </p>
              <ul class="km__address">
                <li>
                  <i class="fa fa-phone-alt"></i>
                  <span>Emergency Line: (002) 012612457</span>
                </li>
                <li>
                  <i class="fas fa-location-dot"></i>
                  <span>Location: Street 68, Mahattan, <br> New York</span>
                </li>
                <li>
                  <i class="fas fa-clock"></i>
                  <span>Mon - Fri: 8:00 am - 7:00 pm</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- message box ends -->

  <!-- social btn start -->
  <div class="km__social__btn">
    <div class="container">
      <div class="d-flex justify-content-sm-between justify-content-center align-items-center flex-wrap gap-20">
        <a href="#" class="facebok social-btn">facebook</a>
        <a href="#" class="twitter social-btn">Twitter</a>
        <a href="#" class="google__plus social-btn">Google Plus</a>
        <a href="#" class="Pinterest social-btn">Pinterest</a>
      </div>
    </div>
  </div>
  <!-- social btn start -->

  <!-- testimonials sction start -->
  <section class="km__testimonial__slider__section ptb-120">
    <div class="container">
      <div class="km__main__slider slider-spacing">
        <div class="slider__item">
          <div class="row g-4 align-items-center">
            <div class=" col-md-5">
              <img src="{{ asset('frontend/images/about/t-man.png') }}" alt="images not found" class="img-fluidw-">
            </div>
            <div class="col-md-7">
              <div class="km__testimonial__content">
                <h4 class="mb-30">Satisfied Users Over The Globe</h4>
                <p class="mb-40 fs-24"> On the other hand, we denounce with righteous indignation and dislike men who
                  are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that
                  they cannot foresee the pain and trouble</p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__item">
          <div class="row g-4 align-items-center">
            <div class="col-md-5">
              <img src="{{ asset('frontend/images/about/t-man.png') }}" alt="images not found" class="img-fluidw-">
            </div>
            <div class="col-md-7">
              <div class="km__testimonial__content">
                <h4 class="mb-30">Satisfied Users Over The Globe</h4>
                <p class="mb-40 fs-24"> On the other hand, we denounce with righteous indignation and dislike men who
                  are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that
                  they cannot foresee the pain and trouble</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="km__bottom_slider slider-spacing">
        <div class="bottom__slider">
          <div class="slider__item d-flex gap-20">
            <div class="flex-shrink-0">
              <img src="{{ asset('frontend/images/about/t-user.png') }}" alt="">
            </div>
            <div class="content">
              <span>John Deo</span>
              <p>Volunteer</p>
            </div>
          </div>
          <div class="slider__item d-flex gap-20">
            <div class="flex-shrink-0">
              <img src="{{ asset('frontend/images/about/t-user.png') }}" alt="">
            </div>
            <div class="content">
              <span>John Deo</span>
              <p>Volunteer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- testimonials sction start -->
  <!-- map section start -->
  <div class="km__map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48350.96166403442!2d-74.01578431620874!3d40.76345205485858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25992d302a075%3A0x5c6ba32d9744316!2s68%20Morton%20Street!5e0!3m2!1sbn!2sbd!4v1699265289408!5m2!1sbn!2sbd"
      style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  <!-- map section ends -->

@endsection
