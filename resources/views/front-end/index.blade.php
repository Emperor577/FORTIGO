<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AutoServicing - Auto Service & Workshop HTML5 Website Template</title>

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="{{ asset("assets/img/favicon-icon.png") }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/font-awesome.min.css") }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/flaticon.css") }}">
    <!-- Ionicons CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/ionicons.min.css") }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/owl.carousel.css") }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/magnific-popup.css") }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/swiper.min.css") }}">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/datepicker.css") }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/animate.css") }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/responsive.css") }}">
    <!-- My Custom style -->
    <link rel="stylesheet" href="{{ asset("assets/css/myCustom.css") }}">
</head>

<body>
<!-- Preloader -->
<div class="site-preloader-wrap">
    <div class="cssload-loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Preloader -->


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light auto-navbar header-sticky">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset("assets/img/logo.png") }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">@lang('translate.home')</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}" >@lang('translate.products')</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">@lang('translate.contact')</a>
                </li>

                <li class="nav-item dropdown">
                    @if($locale === 'ru')
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-globe"></i> RU
                        </a>
                    @elseif($locale === 'uz')
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-globe"></i> UZ
                        </a>
                    @endif
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('locale', "ru") }}">RU</a></li>
                        <li><a class="dropdown-item" href="{{ route('locale', "uz") }}">UZ</a></li>
                    </ul>
                </li>

                <li class="nav-item nav-call-back">
                    <a class="btn theme-btn" href="appointment-dark.html">@lang('translate.back_call')</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End navbar -->

@yield('content')

<!-- Footer Area -->
<footer class="site-footer">
    <!-- Footer Top Area -->
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-top-info">
                        <span class="footer-icons"><i class="fa fa-map-o"></i></span> <p>1828 Johns Drive Glenview, IL 60025</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-top-info">
                        <span class="footer-icons"><i class="flaticon-crane"></i></span> <p>Working Days Monday to Friday</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-top-info">
                        <span class="footer-icons"><i class="fa fa-headphones"></i></span> <p>Give us a free call (224) 228-8475</p>
                    </div>
                </div>
            </div>
            <div class="hr-line"></div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="footer-wid">
                        <a href="index.html" class="footer-logo"><img src="{{ asset("assets/img/logo.png") }}" alt="logo"></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="link-color">Read More About Us <i class="fa  fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="footer-wid footer-menu">
                                <h3 class="footer-wid-title">Navigation</h3>
                                <ul>
                                    <li><a href="index.html"><i class="fa  fa-angle-right"></i> home</a></li>
                                    <li><a href="about-us.html"><i class="fa  fa-angle-right"></i> About</a></li>
                                    <li><a href="projects.html"><i class="fa  fa-angle-right"></i> our mission</a></li>
                                    <li><a href="industries.html"><i class="fa  fa-angle-right"></i> services</a></li>
                                    <li><a href="gallery.html"><i class="fa  fa-angle-right"></i> gallery</a></li>
                                    <li><a href="blog.html"><i class="fa  fa-angle-right"></i> blog</a></li>
                                    <li><a href="contact-us.html"><i class="fa  fa-angle-right"></i> contact</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="footer-wid footer-menu">
                                <h3 class="footer-wid-title">Hours of Operation</h3>
                                <ul>
                                    <li><i class="fa  fa-angle-right"></i> Monday: 7:30am - 5:30pm</li>
                                    <li><i class="fa  fa-angle-right"></i> Tuesday: 7:30am - 5:30pm</li>
                                    <li><i class="fa  fa-angle-right"></i> Wednesday: 7:30am - 5:30pm</li>
                                    <li><i class="fa  fa-angle-right"></i> Thursday: 7:30am - 5:30pm</li>
                                    <li><i class="fa  fa-angle-right"></i> Friday: 7:30am - 5:30pm</li>
                                    <li><i class="fa  fa-angle-right"></i> Saturday: 7:30am - 3:00pm</li>
                                    <li><i class="fa  fa-angle-right"></i> Sunday: Closed</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="footer-wid">
                                <h3 class="footer-wid-title">Get In Touch</h3>
                                <p>1828 Johns Drive Glenview, IL 60025</p>
                                <div class="address-info">
                                    <span><i class="fa  fa-phone"></i> (224) 228-8475</span><br>
                                    <span><i class="fa  fa-envelope"></i> support@carservice.com </span>
                                </div>
                                <div class="subscribe">
                                    <form action="index.html">
                                        <input type="text" placeholder="Type your email" required>
                                        <button>Subscribe now <i class="fa  fa-paper-plane"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="social-icos">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Footer Top -->

    <!-- Footer Bottom Area -->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-5">
                    &copy; Copyright <script type="text/javascript">
                        var d=new Date();
                        document.write(d.getFullYear());
                    </script> All Rights Reserved.
                </div>
                <div class="col-md-6 col-sm-7 text-right">
                    <a href="#">Terms & Condition</a> <span class="seprator">|</span> <a href="#">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div> <!-- End Footer Bottom Area -->
</footer> <!-- End Footer Area -->

<!-- Back Top top -->
<a href="#content" class="back-to-top">Top</a>
<!-- End Back Top top -->

<!-- jQuery min js -->
<script src="{{ asset("assets/js/jquery.2.1.4.min.js") }}"></script>
<!-- Bootstrap JS file -->
<script src="{{ asset("assets/js/proper.min.js") }}"></script>
<!-- Bootstrap JS file -->
<script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
<!-- Owl-Carousel JS file -->
<script src="{{ asset("assets/js/owl.carousel.min.js") }}"></script>
<!-- Magnific Popup JS file -->
<script src="{{ asset("assets/js/jquery.magnific-popup.min.js") }}"></script>
<!-- Mixitup JS file -->
<script src="{{ asset("assets/js/mixitup.min.js") }}"></script>
<!-- Swiper JS file -->
<script src="{{ asset("assets/js/swiper.jquery.min.js") }}"></script>
<!-- Datepicker JS file -->
<script src="{{ asset("assets/js/datepicker.js") }}"></script>
<!-- WOW JS file -->
<script src="{{ asset("assets/js/wow.min.js") }}"></script>
<!-- Isotop JS JS file -->
<script src="{{ asset("assets/js/isotope.pkgd.min.js") }}"></script>
<!-- Waypoints JS file -->
<script src="{{ asset("assets/js/waypoints.min.js") }}"></script>
<!-- Counter JS file -->
<script src="{{ asset("assets/js/jquery.counterup.min.js") }}"></script>
<!-- RipplesJS -->
<script src="{{ asset("assets/js/jquery.ripples-min.js") }}"></script>
<!-- YTPlayer JS -->
<script src="{{ asset("assets/js/jquery.mb.YTPlayer.min.js") }}"></script>
<!-- Jarallax JS -->
<script src="{{ asset("assets/js/jarallax.min.js") }}"></script>
<!-- Parsley JS -->
<script src="{{ asset("assets/js/parsley.min.js") }}"></script>
<!-- jQuery Google Map JS file -->
<script src="{{ asset("assets/js/jquery.googlemap.js") }}"></script>
<!-- Google Map api -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0jIY1DdGJ7yWZrPDmhCiupu_K2En_4HY"></script>
<!-- Custom JS file -->
<script src="{{ asset("assets/js/active.js") }}"></script>
</body>
</html>
