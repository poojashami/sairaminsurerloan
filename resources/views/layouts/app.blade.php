<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Sai Ram Insurers')</title>

  <!--=====FAB ICON=======-->
  <link rel="shortcut icon" href="{{ asset('assets/img/logo/titile.png') }}" type="image/x-icon" />

  <!--=====CSS=======-->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/slick-slider.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/mobile-menu.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/sai-ram-cstm.css') }}" />

  <!--=====JQUERY=======-->
  <script src="{{ asset('assets/js/jquery-3-7-1.min.js') }}"></script>
  @stack('styles')
</head>

<body class="body tg-heading-subheading animation-style3">
  <!--=====progress START=======-->
  <div class="paginacontainer">
    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>
  </div>
  <!--=====progress END=======-->

  <!--=====HEADER START=======-->
  <header>
    <div class="header-area header-area1 header-area-all d-none d-lg-block" id="header">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="header-elements">
              <div class="site-logo">
                <a href="{{ route('home') }}" class="site-logo-text">
                  Sai Ram Insurers
                </a>
              </div>

              <div class="main-menu-ex main-menu-ex1">
                <ul>
                  <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                  <li class="dropdown-menu-parrent">
                    <a href="#" class="{{ request()->is('services*') ? 'active' : '' }}">Services <i class="fa-solid fa-angle-down"></i></a>
                    <ul>
                      <li><a href="{{ route('services.business-loan') }}">Business Loan</a></li>
                      <li><a href="{{ route('services.od-limit') }}">Over Draft Limit (OD)</a></li>
                      <li><a href="{{ route('services.msme-limit') }}">MSME LIMIT (MSME)</a></li>
                      <li><a href="{{ route('services.lap') }}">Loan Against Property (LAP)</a></li>
                      <li><a href="{{ route('services.home-loan') }}">Home Loan</a></li>
                      <li><a href="{{ route('services.personal-loan') }}">Personal Loan</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                  <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--=====HEADER END=======-->

  <!--=====Mobile header start=======-->
  <div class="mobile-header d-block d-lg-none">
    <div class="container-fluid">
      <div class="col-12">
        <div class="mobile-header-elements">
          <div class="mobile-logo">
            <a href="{{ route('home') }}" class="site-logo-text" style="font-size: 24px;">Sai Ram Insurers</a>
          </div>
          <div class="mobile-nav-icon">
            <i class="fa-duotone fa-bars-staggered"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mobile-sidebar d-block d-lg-none">
    <div class="logo-m">
      <a href="{{ route('home') }}" class="site-logo-text" style="font-size: 24px;">Sai Ram Insurers</a>
    </div>
    <div class="menu-close">
      <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="mobile-nav">
      <ul>
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
        <li class="has-dropdown">
          <a href="#" class="{{ request()->is('services*') ? 'active' : '' }}">Services</a>
          <ul class="sub-menu">
            <li><a href="{{ route('services.business-loan') }}">Business Loan</a></li>
            <li><a href="{{ route('services.od-limit') }}">Over Draft (OD)</a></li>
            <li><a href="{{ route('services.msme-limit') }}">MSME Limit</a></li>
            <li><a href="{{ route('services.lap') }}">LAP</a></li>
            <li><a href="{{ route('services.home-loan') }}">Home Loan</a></li>
            <li><a href="{{ route('services.personal-loan') }}">Personal Loan</a></li>
          </ul>
        </li>
        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a></li>
      </ul>
    </div>

    <div class="mobile-button">
      <a class="menu-btn2" href="{{ route('contact') }}">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
    </div>

    <div class="single-footer-items">
      <h3>Contact Us</h3>
      <div class="contact-box">
        <div class="icon"><img src="{{ asset('assets/img/icons/footer1-icon1.png') }}" alt="" /></div>
        <div class="headding">
          <p>CALL ANYTIME</p>
          <a href="tel:7838466134">+91 7838466134</a>
        </div>
      </div>
    </div>
  </div>
  <!--=====Mobile header end=======-->

  <main>
    @yield('content')
  </main>

  <!--===== FOOTER AREA START =======-->
  <div class="footer1 _relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="single-footer-items footer-logo-area">
            <a href="{{ route('home') }}" class="site-logo-text">
              Sai Ram Insurers
            </a>
            <div class="space20"></div>
            <div class="heading1">
              <p>At Sai Ram Insurers, we're dedicated to delivering tailored financial solutions and expert loan consultancy to meet the unique needs of businesses and individuals.</p>
            </div>
            <ul class="social-icon">
              <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg col-md-6 col-12">
          <div class="single-footer-items">
            <h3>Service We Offer</h3>
            <ul class="menu-list">
              <li><a href="{{ route('services.business-loan') }}">Business Loan</a></li>
              <li><a href="{{ route('services.od-limit') }}">Over Draft Limit (OD)</a></li>
              <li><a href="{{ route('services.msme-limit') }}">MSME Limit</a></li>
              <li><a href="{{ route('services.lap') }}">Loan Against Property (LAP)</a></li>
              <li><a href="{{ route('services.home-loan') }}">Home Loan</a></li>
              <li><a href="{{ route('services.personal-loan') }}">Personal Loan</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg col-md-6 col-12">
          <div class="single-footer-items">
            <h3>Useful Links</h3>
            <ul class="menu-list">
              <li><a href="{{ route('about') }}">About Us </a></li>
              <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
          <div class="single-footer-items">
            <h3>Contact Us</h3>
            <div class="contact-box">
              <div class="icon"><img src="{{ asset('assets/img/icons/footer1-icon1.png') }}" alt="" /></div>
              <div class="pera"><a href="tel:7838466134">+91 7838466134</a></div>
            </div>
            <div class="contact-box">
              <div class="icon"><img src="{{ asset('assets/img/icons/location icon.png') }}" alt="" /></div>
              <div class="pera">
                <a href="https://maps.app.goo.gl/iLXK3t4bXe9aPut56?g_st=aw" target="_blank">
                  Shop No-FF-18, Sunrise Buildmark Pvt Ltd,<br> Plot No-1B, Sector-4B, Vasundhara,<br> Ghaziabad, Uttar Pradesh, 201012
                </a>
              </div>
            </div>
            <div class="contact-box">
              <div class="icon"><img src="{{ asset('assets/img/icons/footer1-icon3.png') }}" alt="" /></div>
              <div class="pera"><a href="mailto:info@sairaminsurers.com">info@sairaminsurers.com</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="space40"></div>
    </div>

    <div class="copyright-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="coppyright text-center mt-3">
              <p>
                <a href="{{ route('home') }}" target="_blank" style="color: inherit; text-decoration: none;">Sai Ram Insurers</a> – All Rights Reserved © {{ date('Y') }} | Designed & Developed by <a href="https://indicorpit.com/" target="_blank" style="color: inherit; text-decoration: none;">IndiCorp IT Solutions</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== FOOTER AREA END =======-->

  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script src="{{ asset('assets/js/fontawesome.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.countup.js') }}"></script>
  <script src="{{ asset('assets/js/mobile-menu.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/slick-slider.js') }}"></script>
  <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
  <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
  <script src="{{ asset('assets/js/Splitetext.js') }}"></script>
  <script src="{{ asset('assets/js/text-animation.js') }}"></script>
  <script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.lineProgressbar.js') }}"></script>
  <script src="{{ asset('assets/js/ripple-btn.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <a href="https://wa.me/917838466134" class="whatsapp-float" target="_blank">
    <img src="{{ asset('assets/img/whatsapp_160.png') }}" alt="WhatsApp" />
  </a>
  @stack('scripts')
</body>

</html>
