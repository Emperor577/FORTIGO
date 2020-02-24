<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158939316-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-158939316-1');
    </script>

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
    <!-- modal style -->
    <link rel="stylesheet" href="{{ asset("assets/dialog/css/component.css") }}">

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
                    <button class="btn theme-btn mt-0" id="call_back_btn" >@lang('translate.back_call')</button>
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
                        <span class="footer-icons"><i class="fa fa-map-o"></i></span> <p>{{ $contact->address }}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-top-info">
                        <span class="footer-icons"><i class="flaticon-crane"></i></span> <p>Working Days Monday to Friday</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-top-info">
                        <span class="footer-icons"><i class="fa fa-headphones"></i></span> <p>@php $phone = explode(',', $contact->phone); foreach ($phone as $item) { echo $item.'</br>';  } @endphp</p>
                    </div>
                </div>
            </div>
            <div class="hr-line"></div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="footer-wid">
                        <a href="{{ route('home') }}" class="footer-logo"><img src="{{ asset("assets/img/logo.png") }}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="footer-wid footer-menu">
                                <h3 class="footer-wid-title">@lang('translate.menu')</h3>
                                <ul>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('home') }}">@lang('translate.home')</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('products') }}" >@lang('translate.products')</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact') }}">@lang('translate.contact')</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
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
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="social-icos">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-telegram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
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
                    <a href="#">Powered by</a> <span class="seprator">|</span> <a href="https://www.codestudio.uz" target="_blank">Code Studio</a>
                </div>
            </div>
        </div>
    </div> <!-- End Footer Bottom Area -->
</footer> <!-- End Footer Area -->

<!-- Back Top top -->
<a href="#content" class="back-to-top">Top</a>
<!-- End Back Top top -->

<!-- The Modal -->
<div id="call_back_modal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <h2>@lang('translate.back_call')</h2>
            <span class="close">&times;</span>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('call-back') }}" >
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>@lang('translate.name')</label>
                            <input type="text" class="form-control" id="contact_name" name="name" autocomplete="off"/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>@lang('translate.phone')</label>
                            <input type="text" class="form-control" name="phone" id="contact_phone" autocomplete="off"/>
                        </div>
                    </div>
                    <button type="submit" class="col-lg-12 btn theme-btn">@lang('translate.send')</button>
                </div>
            </form>
        </div>
    </div>

</div>

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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0jIY1DdGJ7yWZrPDmhCiupu_K2En_4HY"></script>
<!-- Custom JS file -->
<script src="{{ asset("assets/js/active.js") }}"></script>
<script>
    // Get the modal
    var modal = document.getElementById("call_back_modal");

    // Get the button that opens the modal
    var btn = document.getElementById("call_back_btn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "flex";
    };

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
</script>
</body>
</html>
