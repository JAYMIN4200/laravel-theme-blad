<!-- scroll to top -->
<div class="progress-wrap cursor-pointer active-progress">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
        style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 221.377;">
      </path>
    </svg>
  </div>
  <!-- scroll to top -->


  <!-- header start -->
  <header>
    <div class="header_top d-none d-lg-block d-xl-block d-xxl-block">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3">
            <div class="header_top_content">
              <span><i class="fa-solid fa-phone"></i></span>
              <a href="tel:01977259912">+01 (977) 2599 12</a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3">
            <div class="header_top_content">
              <span><i class="fa-solid fa-envelope"></i></span>
              <a href="mailto:company@domain.com">company@domain.com</a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3">
            <div class="header_top_content">
              <span><i class="fa-solid fa-location-dot"></i></span>
              <a href="#">3146 Koontz Lane, USA</a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3">
            <div class="header_top_social">
              <p>Follow Now</p>
              <ul class="d-flex">
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header_bottom header_bottom2">
      <div class="container">
        <div class="row align-items-center position-relative">
          <div class="col-xl-2 col-lg-2 col-md-4 col-6">
            <div class="header_logo">
              <a href="{{route('home1')}}"  ><img src="{{ asset('frontend/images/logo1.png') }}" alt="images not founds" class="img-fluid"></a>
            </div>
          </div>
          <div class="col-xl-8 col-lg-8 d-none d-xxl-block d-xl-block">
            <ul class="main_menu">
              <li class="position-relative">
                <a href="javascript:void(0)">Home <i class="fa-solid fa-angle-down"></i></a>
                <ul class="submenu_wrapper">
                  <li><a href="{{route('home1')}}">Home 1</a></li>
                  <li><a href="{{route('home2')}}">Home 2</a></li>
                  <li><a href="{{route('home3')}}">Home 3</a></li>
                </ul>
              </li>
              <li><a href="{{route('aboutus')}}">About Us</a></li>
              <li class="position-relative">
                <a href="javascript:void(0)">Campaign <i class="fa-solid fa-angle-down"></i></a>
                <ul class="submenu_wrapper">
                  <li><a href="{{route('campaign')}}">Campaign </a></li>
                  <li><a href="{{route('campaigndetails')}}">Campaign Details</a></li>
                </ul>
              </li>
              <li>
                <a href="javascript:void(0)">Pages <i class="fa-solid fa-angle-down"></i></a>
                <div class="bi_megamenu">
                  <div class="megamenu_row">
                    <div class="megamenu-column border-end">
                      <h6 class="column-title">Home</h6>
                      <ul class="pages_list">
                        <li><a href="{{route('home1')}}">Home 1</a></li>
                        <li><a href="{{route('home2')}}">Home 2</a></li>
                        <li><a href="{{route('home3')}}">Home 3</a></li>
                      </ul>
                    </div>
                    <div class="megamenu-column border-end">
                      <h6 class="column-title">Pages</h6>
                      <ul class="pages_list">
                        <li><a href="{{route('aboutus')}}">About Us</a></li>
                        <li><a href="{{route('service')}}">Service</a></li>
                        <li><a href="{{route('servicedetails')}}">Service Details</a></li>
                        <li><a href="{{route('teammember')}}">Team Member</a></li>
                        <li><a href="{{route('terms')}}">Terms & Condation</a></li>
                        <li><a href="{{route('privacypolicy')}}">Privacy Policy</a></li>
                      </ul>
                    </div>
                    <div class="megamenu-column border-end">
                      <h6 class="column-title">Pages</h6>
                      <ul class="pages_list">
                        <li><a href="{{route('photogallery')}}">photo-gallary</a></li>
                        <li><a href="{{route('faq')}}">faq</a></li>
                        <li><a href="{{route('campaign')}}">Campaign</a></li>
                        <li><a href="{{route('campaigndetails')}}">Campaign Details</a></li>
                        <li><a href="{{route('donate')}}">Donate</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                        <li><a href="{{route('register')}}">Contract</a></li>
                        <li><a href="{{route('404')}}">404</a></li>
                      </ul>
                    </div>
                    <div class="megamenu-column border-end">
                      <h6 class="column-title">Blog</h6>
                      <ul class="pages_list">
                        <li><a href="{{route('blogdefault')}}">Blog Default</a></li>
                        <li><a href="{{route('blogdetails')}}">Blog Details</a></li>
                        <li><a href="{{route('blogstyle1')}}">Blog Style 1</a></li>
                        <li><a href="{{route('blogstyle2')}}">Blog style 2</a></li>
                        <li><a href="{{route('blogleft')}}">Blog Leftsidebar</a></li>
                        <li><a href="{{route('blogright')}}">Blog Rightsidebar</a></li>
                      </ul>
                    </div>
                    <div class="megamenu-column banner">
                      <div class="megamenu-banner img">
                        <div class="row ">
                          <div class="col-12">
                            <div class="fblog_img img">
                              <a href=""{{route('blogdetails')}}"><img src="{{ asset('frontend/images/f1.jpg') }}" class="w-100" alt=""></a>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="fblog_content">
                              <a href=""{{route('blogdetails')}}"> A Formula For Help And Happiness</a>
                              <span>18 February, 2022</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="position-relative">
                <a href="javascript:void(0)">Blog <i class="fa-solid fa-angle-down"></i></a>
                <ul class="submenu_wrapper">
                  <li><a href="{{route('blogdefault')}}">Blog</a></li>
                  <li><a href="{{route('blogdetails')}}">Blog Details</a></li>
                  <li><a href="{{route('blogleft')}}">Blog Leftsidebar</a></li>
                  <li><a href="{{route('blogright')}}">Blog rightsidebar</a></li>
                  <li><a href="{{route('blogstyle1')}}">Blog style 1</a></li>
                  <li><a href="{{route('blogstyle2')}}">Blog style 2</a></li>
                </ul>
              </li>
              <li><a href="{{route('contacts')}}">Contact</a></li>
            </ul>
          </div>
          <div class="col-xl-2 col-lg-2  d-none d-xxl-block d-xl-block">
            <div class="header_search_menu d-flex">
              <div class="dropdown dropdown_search">
                <button class="search-btn " data-bs-toggle="dropdown" aria-expanded="true"><i
                    class="fa-solid fa-magnifying-glass"></i></button>
                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                  <form class="search-form d-flex align-items-center gap-2">
                    <input type="text" placeholder="Search..." class="theme-input bg-transparent">
                    <button type="submit" class="submit-btn">Go</button>
                  </form>
                </div>
              </div>

              <select>
                <option selected>English</option>
                <option value="1">Franch</option>
                <option value="2">Spanish</option>
              </select>

              <!-- right offcanvas -->
              <div class="offcanvas_right">
                <button class="header_toggle_btn bg-transparent offcanvas_btn" type="button" data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>

          <!-- mobile menu bar -->
          <div class="col-lg-10 col-md-8 col-6 d-block d-xxl-none d-xl-none">
            <div class="d-flex align-items-center gap-2 justify-content-end">
              <div class="dropdown dropdown_search">
                <button class="search-btn " data-bs-toggle="dropdown" aria-expanded="true"><i
                    class="fa-solid fa-magnifying-glass"></i></button>
                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                  <form class="search-form d-flex align-items-center gap-2">
                    <input type="text" placeholder="Search..." class="theme-input bg-transparent">
                    <button type="submit" class="submit-btn">Go</button>
                  </form>
                </div>
              </div>
              <div class="mobile_menu">
                <button class="header_toggle_btn bg-transparent border-0" type="button" data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvas-mobile">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
         <!-- mobile menu bar -->
         <div class="col-lg-10 col-md-8 col-6 d-block d-xxl-none d-xl-none">
            <div class="d-flex align-items-center gap-2 justify-content-end">
              <div class="dropdown dropdown_search">
                <button class="search-btn " data-bs-toggle="dropdown" aria-expanded="true"><i
                    class="fa-solid fa-magnifying-glass"></i></button>
                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                  <form class="search-form d-flex align-items-center gap-2">
                    <input type="text" placeholder="Search..." class="theme-input bg-transparent">
                    <button type="submit" class="submit-btn">Go</button>
                  </form>
                </div>
              </div>
              <div class="mobile_menu">
                <button class="header_toggle_btn bg-transparent border-0" type="button" data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvas-mobile">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
