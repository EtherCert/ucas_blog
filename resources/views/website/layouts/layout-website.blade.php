
<!--
<script>
        document.getElementById("posts").className += " menu-item-open menu-item-here";
        document.getElementById("sub-posts-1").className += " menu-item-active";
    </script>
-->
<!doctype html>
<html lang="zxx" dir="rtl" class="theme-light">
  <!-- Mirrored from templates.envytheme.com/ketan/rtl/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2023 19:00:08 GMT -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Noto Kufi Arabic' rel='stylesheet'>
    <!--end::Fonts-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('website-assets/css/bootstrap.rtl.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('website-assets/css/animate.min.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('website-assets/css/meanmenu.css')}}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{asset('website-assets/css/boxicons.min.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('website-assets/css/owl.carousel.min.css')}}">
    <!-- Owl Carousel Default CSS -->
    <link rel="stylesheet" href="{{asset('website-assets/css/owl.theme.default.min.css')}}">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="{{asset('website-assets/css/odometer.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('website-assets/css/magnific-popup.min.css')}}">
    <!-- Imagelightbox CSS -->
    <link rel="stylesheet" href="{{asset('website-assets/css/imagelightbox.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('website-assets/css/style.css')}}">
    <!-- Dark CSS -->
    <link rel="stylesheet" href="{{asset('website-assets/css/dark.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('website-assets/css/responsive.css')}}">
    <!-- RTL CSS -->
    <link rel="stylesheet" href="{{asset('website-assets/css/rtl.css')}}">
    <!--begin::Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Noto Kufi Arabic' rel='stylesheet'>
    <!--end::Fonts-->
    <title>Ketan - Childcare & Kids School HTML Template</title>
    <link rel="icon" type="image/png" href="{{asset('website-assets/img/favicon.png')}}"">
    <style>
      body {
      font-family: 'Noto Kufi Arabic !important';
      font-size: 22px;
      }
    </style>
  </head>
  <body style="font-family: 'Noto Kufi Arabic !important'">
    <!-- Start Preloader Area -->
    <div class="preloader">
      <div class="loader">
        <div class="wrapper">
          <div class="circle circle-1"></div>
          <div class="circle circle-1a"></div>
          <div class="circle circle-2"></div>
          <div class="circle circle-3"></div>
        </div>
      </div>
    </div>
    <!-- End Preloader Area -->
    <!-- Start Navbar Area -->
    <div class="navbar-area">
      <div class="main-responsive-nav">
        <div class="container">
          <div class="main-responsive-menu">
            <div class="logo">
              <a href="index.html">
                <script type="text/javascript" style="display:none">
                  //<![CDATA[
                  window.__mirage2 = {petok:"kmUX7NBJk6GCX2XMKFCDqqor9A02VZeiGkzkyugAkp0-1800-0"};
                  //]]>
                </script>
                <script type="text/javascript" src="../../../ajax.cloudflare.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js"></script>
                <img data-cfsrc="{{asset('website-assets/img/logo.png')}}"" class="black-logo" alt="image" style="display:none;visibility:hidden;">
                <noscript><img src="{{asset('website-assets/img/logo.png')}}"" class="black-logo" alt="image"></noscript>
                <img data-cfsrc="{{asset('website-assets/img/logo-2.png')}}"" class="white-logo" alt="image" style="display:none;visibility:hidden;">
                <noscript><img src="{{asset('website-assets/img/logo-2.png')}}"" class="white-logo" alt="image"></noscript>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="main-navbar">
        <div class="container">
          <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.html">
              <img data-cfsrc="{{asset('website-assets/img/logo.png')}}"" class="black-logo" alt="image" style="display:none;visibility:hidden;">
              <noscript><img src="{{asset('website-assets/img/logo.png')}}"" class="black-logo" alt="image"></noscript>
              <img data-cfsrc="{{asset('website-assets/img/logo-2.png')}}"" class="white-logo" alt="image" style="display:none;visibility:hidden;">
              <noscript><img src="{{asset('website-assets/img/logo-2.png')}}"" class="white-logo" alt="image"></noscript>
            </a>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="contact.html" class="nav-link">
                  الرئيسة
                  </a>
                </li>
                <li class="nav-item">
                  <a href="contact.html" class="nav-link">
                  المدونات
                  </a>
                </li>
                <li class="nav-item">
                  <a href="contact.html" class="nav-link">
                  من نحن
                  </a>
                </li>
                <li class="nav-item">
                  <a href="contact.html" class="nav-link">
                  تواصل معنا
                  </a>
                </li>
                  @if(!Auth::user())
                  <li class="nav-item">
                  <a href="{{route('register')}}" class="nav-link">
مستخدم جديد                  </a>
                      @endif
                </li>
              </ul>
              <div class="others-options d-flex align-items-center">
                <div class="option-item">
                    @if(Auth::user())
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a  href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();" class="default-btn">
                                تسجيل الخروج
                            </a>
                        </form>
                    @else
                        <a href="{{route('login')}}" class="default-btn">تسجيل الدخول</a>
                    @endif
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <div class="others-option-for-responsive">
        <div class="container">
          <div class="dot-menu">
            <div class="inner">
              <div class="circle circle-one"></div>
              <div class="circle circle-two"></div>
              <div class="circle circle-three"></div>
            </div>
          </div>
          <div class="container">
            <div class="option-inner">
              <div class="others-options d-flex align-items-center">
                <div class="option-item">
                  <a href="#" class="default-btn">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Navbar Area -->
    @yield('content')
    <!-- Start Newsletter Area -->
    <div class="newsletter-area ptb-100">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="newsletter-content">
              <h4>اشترك بالقائمة البريدية ليصلك كل جديد</h4>
            </div>
          </div>
          <div class="col-lg-6">
            <form class="newsletter-form">
              <input type="email" class="input-newsletter" placeholder="أدخل بريدك الإلكتروني" name="EMAIL" required autocomplete="off">
              <button type="submit"> اشترك الآن</button>
              <div id="validator-newsletter" class="form-result"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="newsletter-shape">
        <div class="shape-1">
          <img data-cfsrc="{{asset('website-assets/img/newsletter/newsletter-shape-1.png')}}"" alt="image" style="display:none;visibility:hidden;">
          <noscript><img src="{{asset('website-assets/img/newsletter/newsletter-shape-1.png')}}"" alt="image"></noscript>
        </div>
        <div class="shape-2">
          <img data-cfsrc="{{asset('website-assets/img/newsletter/newsletter-shape-2.png')}}"" alt="image" style="display:none;visibility:hidden;">
          <noscript><img src="{{asset('website-assets/img/newsletter/newsletter-shape-2.png')}}"" alt="image"></noscript>
        </div>
      </div>
    </div>
    <!-- End Newsletter Area -->
    <!-- Start Footer Area -->
    <section class="footer-area pt-100 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="single-footer-widget">
              <div class="logo">
                <h2>
                  <a href="index.html">فكرة</a>
                </h2>
              </div>
              <p>نقدم لك مدونات متنوعة في شتى المجالات مع أمهر كاتبي المحتوى لتثقف نفسك ومن حولك</p>
              <ul class="social">
                <li>
                  <a href="#" target="_blank">
                  <i class='bx bxl-facebook'></i>
                  </a>
                </li>
                <li>
                  <a href="#" target="_blank">
                  <i class='bx bxl-twitter'></i>
                  </a>
                </li>
                <li>
                  <a href="#" target="_blank">
                  <i class='bx bxl-pinterest-alt'></i>
                  </a>
                </li>
                <li>
                  <a href="#" target="_blank">
                  <i class='bx bxl-linkedin'></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="single-footer-widget">
              <h3>تواصل معنا</h3>
              <ul class="footer-contact-info">
                <li>
                  <i class='bx bxs-phone'></i>
                  <span>الجوال : <a href="tel:882569756">882-569-756</a></span>
                </li>
                <li>
                  <i class='bx bx-envelope'></i>
                  <span>البريد الإلكتروني :  <a href=#"><span>fekra@gmail.com</span></a></span>
                </li>
                <li>
                  <i class='bx bx-map'></i>
                  <span>العنوان :   فلسطين - غزة</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Footer Area -->
    <!-- Start Go Top Area -->
    <div class="go-top">
      <i class='bx bx-up-arrow-alt'></i>
    </div>
    <!-- End Go Top Area -->
    <!-- dark version -->
    <div class="dark-version">
      <label id="switch" class="switch">
      <input type="checkbox" onchange="toggleTheme()" id="slider">
      <span class="slider round"></span>
      </label>
    </div>
    <!-- dark version -->
    <!-- Jquery Slim JS -->
    <script src="{{asset('website-assets/js/jquery.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('website-assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Meanmenu JS -->
    <script src="{{asset('website-assets/js/jquery.meanmenu.js')}}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{asset('website-assets/js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{asset('website-assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Imagelightbox JS -->
    <script src="{{asset('website-assets/js/imagelightbox.min.js')}}"></script>
    <!-- Odometer JS -->
    <script src="{{asset('website-assets/js/odometer.min.js')}}"></script>
    <!-- Jquery Appear JS -->
    <script src="{{asset('website-assets/js/jquery.appear.min.js')}}"></script>
    <!-- Ajaxchimp JS -->
    <script src="{{asset('website-assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <!-- Form Validator JS -->
    <script src="{{asset('website-assets/js/form-validator.min.js')}}"></script>
    <!-- Contact JS -->
    <script src="{{asset('website-assets/js/contact-form-script.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{asset('website-assets/js/main.js')}}"></script>
  </body>
</html>
