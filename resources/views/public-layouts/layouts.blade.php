<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <link rel="manifest" href="site.webmanifest">--}}
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public-theme/assets/img/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('public-theme/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public-theme/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public-theme/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public-theme/assets/css/price_rangs.css')}}">
    <link rel="stylesheet" href="{{asset('public-theme/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('public-theme/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('public-theme/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('public-theme/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('public-theme/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public-theme/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('public-theme/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('public-theme/assets/css/style.css')}}">
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('public-theme/assets/img/logo/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparrent">
            <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="{{route('index')}}"><img src="{{asset('public-theme/assets/img/logo/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="{{route('index')}}">Home</a></li>
                                            <li><a href="{{route('publicjob.all')}}">Find a Jobs </a></li>
                                            <li><a href="{{route('contact')}}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    @guest
                                        @if (Route::has('login'))
                                               <a href="{{ route('login') }}" class="btn head-btn2">Login</a>
                                        @endif

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="btn head-btn1">Register</a>
                                            @endif

                                    @else
{{--                                        <li class="nav-item dropdown">--}}
                                            <a id="navbarDropdown" href="#" class="text-secondary font-weight-bold pr-3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                               Welcome {{ Auth::user()->name }}
                                            </a>

{{--                                            <div class="btn head-btn2" aria-labelledby="navbarDropdown">--}}
                                                <a class="text-danger font-weight-bold" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
{{--                                            </div>--}}
{{--                                        </li>--}}
                                    @endguest
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>




    @yield('content')
    <footer>



        <!-- Footer Start-->
        <div class="footer-area footer-bg">
            <div class="container pt-5">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <div class="footer-tittle">
                                    <h4>About Us</h4>
                                    <div class="footer-pera">
                                        <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so
                                            behold.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                        <p>Address :Your address goes
                                            here, your demo address.</p>
                                    </li>
                                    <li><a href="#">Phone : +8880 44338899</a></li>
                                    <li><a href="#">Email : info@colorlib.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="#"> View Project</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Testimonial</a></li>
                                    <li><a href="#">Proparties</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <div class="footer-pera footer-pera2">
                                    <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email"
                                                placeholder="Email Address" class="placeholder hide-on-focus"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img
                                                        src="{{asset('public-theme/assets/img/icon/form.png')}}"
                                                        alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                {{-- <div class="row footer-wejed justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <!-- logo -->
                        <div class="footer-logo mb-20">
                            <a href="index.html"><img src="{{asset('public-theme/assets/img/logo/logo2_footer.png')}}"
                alt=""></a>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
            <div class="footer-tittle-bottom">
                <span>5000+</span>
                <p>Talented Hunter</p>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
            <div class="footer-tittle-bottom">
                <span>451</span>
                <p>Talented Hunter</p>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
            <!-- Footer Bottom Tittle -->
            <div class="footer-tittle-bottom">
                <span>568</span>
                <p>Talented Hunter</p>
            </div>
        </div>
        </div> --}}
        </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-10 col-lg-10 ">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="footer-social f-right">
                                <a href="https://www.facebook.com/taloosh.mohammad"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/tala16_7"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/tala-alwaheidi"><i class="fab fa-linkedin"></i></a>
                                <a href="https://github.com/TalaAlWaheidi"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{asset('public-theme/./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('public-theme/./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('public-theme/./assets/js/popper.min.js')}}"></script>
    <script src="{{asset('public-theme/./assets/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{asset('public-theme/./assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{asset('public-theme/./assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public-theme/./assets/js/slick.min.js')}}"></script>
    <script src="{{asset('public-theme/./assets/js/price_rangs.js')}}"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="{{asset('public-theme/./assets/js/wow.min.js')}}"></script>
    <script src="{{asset('public-theme/./assets/js/animated.headline.js')}}"></script>
    <script src="{{asset('public-theme/./assets/js/jquery.magnific-popup.js')}}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{asset('public-theme/./assets/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public-theme/./assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('public-theme/./assets/js/jquery.sticky.js')}}"></script>

    <!-- contact js -->
    <script src="{{asset('public-theme/./assets/js/contact.js')}}"></script>
    <script src="{{asset('public-theme/./assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('public-theme/./assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('public-theme/./assets/js/mail-script.js')}}"></script>
    <script src="{{asset('public-theme/./assets/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{asset('public-theme/./assets/js/plugins.js')}}"></script>
    <script src="{{asset('public-theme/./assets/js/main.js')}}"></script>

</body>

</html>
