<!-- footer section start -->
<footer>
    <div class="footer_top footer_top2 pt-115">
      <div class="container ">
        <div class="row border-bottom justify-content-center">
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
            <div class="footer_content">
              <h5>About Us</h5>
              <p>Duis aute irure dolor in reprehenderit velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                sint occaecat</p>
              <ul>
                <li><span>Phone:</span> +1(456)657-887, 999</li>
                <li><span>Email:</span> contactblood@gmail.com</li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-6 col-6 mb-4">
            <div class="footer_content">
              <h5>Quick Links</h5>
              <ul>
                <li><a href="{{route('service')}}"><i class="fa-solid fa-angles-right"></i> Services</a></li>
                <li><a href="{{route('aboutus')}}"><i class="fa-solid fa-angles-right"></i> About Us</a></li>
                <li><a href="{{route('campaign')}}"><i class="fa-solid fa-angles-right"></i> New Campaign</a></li>
                <li><a href="{{route('blogdetails')}}"><i class="fa-solid fa-angles-right"></i> Latest News</a></li>
                <li><a href="{{route('contacts')}}"><i class="fa-solid fa-angles-right"></i> Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-6 col-6 mb-4">
            <div class="footer_content">
              <h5>Our Services</h5>
              <ul>
                <li><a href="{{route('donate')}}"><i class="fa-solid fa-angles-right"></i> Blood Donation</a></li>
                <li><a href="{{route('donate')}}"><i class="fa-solid fa-angles-right"></i> Health Check</a></li>
                <li><a href="{{route('donate')}}"><i class="fa-solid fa-angles-right"></i> Blood Bank</a></li>
                <li><a href="{{route('donate')}}"><i class="fa-solid fa-angles-right"></i> Donate Process</a></li>
                <li><a href="{{route('donate')}}"><i class="fa-solid fa-angles-right"></i> Blood Info</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="footer_content">
              <h5>Latest News</h5>
              <div class="footer_blog">
                <div class="fblog_item mb-3">
                  <div class="row align-items-center">
                    <div class="col-4">
                      <div class="fblog_img img">
                        <a href="{{route('blogdetails')}}"><img src="{{ asset('frontend/images/f1.jpg') }}" alt=""></a>
                      </div>
                    </div>
                    <div class="col-8">
                      <div class="fblog_content">
                        <a href="{{route('blogdetails')}}"> A Formula For Help And Happiness</a>
                        <span>18 February, 2022</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="fblog_item mb-3">
                  <div class="row align-items-center">
                    <div class="col-4">
                      <div class="fblog_img img">
                        <a href="{{route('blogdetails')}}"><img src="{{ asset('frontend/images/f2.jpg') }}" alt=""></a>
                      </div>
                    </div>
                    <div class="col-8">
                      <div class="fblog_content">
                        <a href="{{route('blogdetails')}}"> Donation is hope for poor helpless children</a>
                        <span>18 February, 2022</span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="row footer_middle">
          <div class="col-xl-6 col-lg-6 col-12 mb-5">
            <div class="footer_subscrive">
              <h6>Subscribe us for more update & news !!</h6>
              <form action="#">
                <input type="email" placeholder="Enter Your Email">
                <button class="red_btn black_bg_hover" type="submit">Subscribe</button>
              </form>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-12">
            <div class="footer_social">
              <ul
                class="social_icon d-flex justify-content-xxl-end justify-content-xl-end justify-content-lg-end justify-content-center  gap-2">
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
              </ul>
              <ul
                class="page_link d-flex justify-content-xxl-end justify-content-xl-end justify-content-lg-end justify-content-center gap-2 flex-wrap">
                <li><a href="{{route('privacypolicy')}}">Privacy Policy</a></li>
                <li><a href="#">/</a></li>
                <li><a href="{{route('terms')}}">Terms & Condition</a></li>
                <li><a href="#">/</a></li>
                <li><a href="{{route('faq')}}">FAQ</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p>Copyright &copy; 2020 Blad Ai. All rights reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section end -->

  <!-- mobile menu offcanvas -->
  <div class="offcanvas offcanvas-start" id="offcanvas-mobile">
    <div class="offcanvas-body">
      <div class="mobile-menu">
        <a href="{{route('home1')}}" class="logo py-3"><img src="{{ asset('frontend/images/icon/red-logo.png') }}" alt="logo"
            class="img-fluid"></a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>

        <ul class="accordion accordion-flush mobile_dropdown" id="accordionFlushExample">
          <li class="accordion-item">
            <h2>
              <button class="accordion-button collapsed p-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false">
                Home
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse">
              <div class="accordion-body">
                <ul>
                  <li><a href="{{route('home1')}}">Home Page 1</a></li>
                  <li><a href="{{route('home2')}}">Home Page 2</a></li>
                  <li><a href="{{route('home3')}}">Home Page 3</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class="accordion-item">
            <h2><a href="{{route('aboutus')}}">About</a></h2>
          </li>
          <li class="accordion-item">
            <h2>
              <button class="accordion-button collapsed p-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapsetwo" aria-expanded="false">
                Pages
              </button>
            </h2>
            <div id="flush-collapsetwo" class="accordion-collapse collapse">
              <div class="accordion-body">
                <ul>
                  <li><a href="{{route('service')}}">service</a></li>
                  <li><a href="{{route('servicedetails')}}">service Details</a></li>
                  <li><a href="{{route('faq')}}">Faq</a></li>
                  <li><a href="{{route('photogallery')}}">Photo Gallary</a></li>
                  <li><a href="{{route('donate')}}">Donate</a></li>
                  <li><a href="{{route('register')}}">Registation</a></li>
                  <li><a href="{{route('privacypolicy')}}">Privacy policy</a></li>
                  <li><a href="{{route('terms')}}">Terms & Condition</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class="accordion-item">
            <h2>
              <button class="accordion-button collapsed p-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapsethree" aria-expanded="false">
                Blog
              </button>
            </h2>
            <div id="flush-collapsethree" class="accordion-collapse collapse">
              <div class="accordion-body">
                <ul>
                  <li><a href="{{route('blogdefault')}}">Blog</a></li>
                  <li><a href="{{route('blogdetails')}}">Blog Details</a></li>
                  <li><a href="{{route('blogleft')}}">Blog Left</a></li>
                  <li><a href="{{route('blogright')}}">Blog Right</a></li>
                  <li><a href="{{route('blogstyle1')}}">Blog Style 1</a></li>
                  <li><a href="{{route('blogstyle2')}}">Blog Style 2</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class="accordion-item">
            <h2><a href="{{route('contacts')}}">Contact</a></h2>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- right side offcanvas -->
  <div class="offcanvas offcanvas-end right_canvas" tabindex="-1" id="offcanvasRight">
    <div class="offcanvas-header">
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="content-top mb-100">
        <a href="{{route('home2')}}">Blad Ai</a>
        <p>Distrak Street 2SK Line, Germanygalore@inside-support.com (+125)
          2156-2145</p>
      </div>
      <div class="offcanvus-gallery d-flex align-items-center flex-wrap">
        <a class="img" href="#"><img src="{{ asset('frontend/images/r1.jpg') }}" alt="not found"></a>
        <a class="img" href="#"><img src="{{ asset('frontend/images/r2.jpg') }}" alt="not found"></a>
        <a class="img" href="#"><img src="{{ asset('frontend/images/r1.jpg') }}" alt="not found"></a>
        <a class="img" href="#"><img src="{{ asset('frontend/images/r3.jpg') }}" alt="not found"></a>
        <a class="img" href="#"><img src="{{ asset('frontend/images/r1.jpg') }}" alt="not found"></a>
        <a class="img" href="#"><img src="{{ asset('frontend/images/r2.jpg') }}" alt="not found"></a>
      </div>
      <div class="offcanvus-newsletter">
        <h4 class="mb-4 text-center">Newsletter</h4>
        <form action="#">
          <input type="email" placeholder="Enter your e-mail" class="theme-input mb-3">
          <button type="submit" class="black_btn w-100 border-0 p-3"><span>SUBSCRIBE
              NOW</span></button>
        </form>
      </div>
    </div>
  </div>

s
