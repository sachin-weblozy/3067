<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Title  -->
    <title>{{ isset($title) ? $title . ' - ' : '' }}{{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" title="Favicon" sizes="16x16">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/bootstrap.min.css') }}">

    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- fontawesome icons  -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/all.min.css') }}">
    <!-- line-awesome icons  -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/line-awesome.css') }}">
    <!-- themify icons  -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/themify-icons.css') }}">
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

    <!-- jquery -->
    <script src="{{ asset('assets/js/lib/jquery-3.0.0.min.js') }}"></script>

    <!-- page style -->
    @yield('pagestyles')

    @livewireStyles

    <style>
        .navbar-toggler {
            padding: .25rem .75rem;
            font-size: 1.25rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid #000000;
            border-radius: .25rem;
            transition: box-shadow .15sease-in-out;
        }
    </style>
</head>

<body class="@yield('bodyclass')">

    <!-- ====== Start Loading ====== -->

    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="text-center">
                <img src="{{ asset('assets/img/phoenix1.png') }}" alt="" class="logo">
                <div class="load-text">
                    <span>P</span>
                    <span>H</span>
                    <span>O</span>
                    <span>E</span>
                    <span>N</span>
                    <span>I</span>
                    <span>X</span>
                </div>
            </div>
        </div>
    </div>

    <!--  start side_menu  -->
    <div class="side_menu4_overlay"></div>
    <div class="side_menu4_overlay2"></div>
    <div class="side_menu_style4">
        <div class="content">
            <div class="main_links">
                <ul>
                    <li> <a href="#" class="main_link"> home </a> </li>
                    <li><a href="../innerpages/about.html" class="main_link"> studio </a></li>
                    <li> <a href="../innerpages/portfolio.html" class="main_link"> cases </a> </li>
                    <li> <a href="../innerpages/blog.html" class="main_link"> news </a> </li>
                    <li> <a href="../innerpages/contact.html" class="main_link"> contact </a> </li>
                </ul>
            </div>
        </div>
        <img src="assets/img/chat_pat2.png" alt="" class="side_shape">
        <img src="assets/img/chat_pat2.png" alt="" class="side_shape2">
        <span class="clss"> <i class="la  la-times"></i> </span>
    </div>
    <!--  End side_menu  -->

    <div class="smooth-scroll-content" id="scrollsmoother-container">

        <!--  Start navbar  -->
        @include('includes.header')
        <!--  End navbar  -->

        <!--Contents-->
        <main>
            {{ $slot }}
        </main>
        <!--End-Contents-->

        <!--  Start footer  -->
        @include('includes.footer')
        <!--  End footer  -->

    </div>

    <!--  Start to top button  -->
    <!-- <a href="#" class="to_top" id="to_top">
        <i class="la la-angle-up"></i>
    </a> -->
    <!--  End to top button  -->
    @livewireScripts
    <!--  request  -->
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
    <script src="{{ asset('assets/js/common_js.js') }}"></script>

    <!-- ===== home scripts ===== -->
    @yield('pagescripts')

</body>

</html>