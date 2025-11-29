<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template ISHA Multi-Purpose themeforest">
    <meta name="description" content="ISHA - Multi-Purpose HTML5 Template">
    <meta name="author" content="">

    <!-- Title  -->
    <title>@yield('title', 'ISHA Interior E-Design Studio')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}" title="Favicon" sizes="16x16">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/bootstrap.min.css') }}">

    <!-- font family -->
    <link href="{{ asset('assets/fonts/google-fonts-1.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fonts/google-fonts-2.css') }}" rel="stylesheet">

    <!-- fontawesome icons  -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <!-- Replace the URL above with your Font Awesome Pro kit URL from fontawesome.com -->
    <!-- animate css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/animate.css') }}">
    <!-- fancybox popup  -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/jquery.fancybox.css') }}">
    <!-- lity popup  -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/lity.css') }}">
    <!-- swiper slider  -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/swiper8.min.css') }}">

    <!-- common style -->
    <link rel="stylesheet" href="{{ asset('assets/css/common_style.css') }}">

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        @font-face {
            font-family: "All Round Gothic W03 Bold";
            src: url("https://db.onlinewebfonts.com/t/035985f659efe093bb3824446b5743a3.eot");
            src: url("https://db.onlinewebfonts.com/t/035985f659efe093bb3824446b5743a3.eot?#iefix")format("embedded-opentype"),
            url("https://db.onlinewebfonts.com/t/035985f659efe093bb3824446b5743a3.woff2")format("woff2"),
            url("https://db.onlinewebfonts.com/t/035985f659efe093bb3824446b5743a3.woff")format("woff"),
            url("https://db.onlinewebfonts.com/t/035985f659efe093bb3824446b5743a3.ttf")format("truetype"),
            url("https://db.onlinewebfonts.com/t/035985f659efe093bb3824446b5743a3.svg#All Round Gothic W03 Bold")format("svg");
        }        
        body{
            font-family: "All Round Gothic W03 Bold", sans-serif !important;
        }
    </style>
</head>

<body class="home-st1 dark-theme">

    <div class="lines"><span></span><span></span><span></span><span></span><span></span></div>


    <!--  Start sidemenu  -->
    <div class="tc-sidemenu-st1">
        <div class="main-links">
            <ul>
                <li> <a href="{{ route('home') }}" class="main-link"> Home </a> </li>
                <li><a href="{{ route('about') }}" class="main-link"> About Us </a></li>
                <li><a href="{{ route('projects') }}" class="main-link"> Projects </a></li>
                <li><a href="{{ route('questionnaire') }}" class="main-link"> Questionnaire </a></li>
                <li><a href="{{ route('contact') }}" class="main-link"> Contact </a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul>
                <li> <a href="#"> Facebook </a> </li>
                <li> <a href="#"> twitter </a> </li>
                <li> <a href="#"> instagram </a> </li>
                <li> <a href="#"> Linkedin </a> </li>
            </ul>
        </div>
        <span class="white-line"></span>
        <img src="{{ asset('assets/img/contact.png') }}" alt="" class="cube img-cover">
        <span class="clss"> <i class="fas fa-times"></i> </span>
        <img src="{{ asset('assets/img/logo.png') }}" alt="" class="logo">
    </div>
    <!--  End sidemenu  -->

    <!--  start cursor  -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!--  end cursor  -->

    <!-- ====== Start Loading ====== -->

    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>



    <div id="scrollsmoother-container" class="scrollsmoother-container {{ request()->routeIs('home') ? '' : 'sub-bg' }}">

        @include('layouts.partials.navbar')

        <!--Contents-->
        <main>
            @yield('content')
        </main>
        <!--End-Contents-->

        @include('layouts.partials.footer')

    </div>


    <!--  Start to top button  -->
    <!-- <a href="#" class="to_top" id="to_top">
        <i class="fas fa-angle-up"></i>
    </a> -->
    <!--  End to top button  -->

    <!--  request  -->
    <script src="{{ asset('assets/js/lib/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/lib/lity.js') }}"></script>
    <script src="{{ asset('assets/js/lib/swiper8-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.counterup.js') }}"></script>
    <script src="{{ asset('assets/js/lib/parallaxie.js') }}"></script>
    <!-- === Gsap === -->
    <script src="{{ asset('assets/js/gsap_lib/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap_lib/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap_lib/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap_lib/SplitText.min.js') }}"></script>
    <!-- === common === -->
    <script src="{{ asset('assets/js/common.js') }}"></script>

    <!-- ===== scripts ===== -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

</body>

</html>
