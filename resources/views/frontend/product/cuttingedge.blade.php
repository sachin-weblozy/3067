@component('layouts.frontend')

    @section('bodyclass', 'inner-pages-style1 s-project-pg-style2')

    @section('pagestyles')
    <link rel="stylesheet" href="{{ asset('assets/css/innerpages.css') }}">
    @endsection

    @section('breadcrumb')

    <header class="s-header-style2">
        <div class="container">
            <div class="info">
                <h1 class="title">Cutting Edge  </h1>
                <h4>PET-EB-Panels</h4>
            </div>
        </div>
        <img src="{{ asset('assets/img/phoenix-edge/phoenix-edge-1.webp') }}" alt="" class="bg img-cover" data-speed="1.25">
    </header>
    @endsection
    
    <!--  Start main-info  -->
    <section class="tc-main-info-style2">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4">
                    <h4 class="fsz-45 fw-bold js-splittext-lines"> The foundation of fine living, crafted to perfection. </h4>
                    <a href="#" class="butn hover-bg-orange1 text-capitalize bg-white rounded-pill mt-90">
                        <span> View Collection <i class="fal fa-arrow-up-right ms-2"></i> </span>
                    </a>
                </div>
                <div class="col-lg-6 offset-lg-2 mt-5 mt-lg-0">
                <div class="container-card">
                <img src="{{ asset('assets/img/upArrow.svg') }}" alt="upArrow">
                    <h6 class="fsz-24 fw-500 mt-4 mt-lg-0 wow fadeInUp slow" data-wow-delay="0.2s"> PhoenixEdge combines cutting-edge PET and Electron Beam Curing (EB) technology to deliver a revolutionary surface solution. Uniting advanced performance with stunning aesthetics, it’s designed for discerning spaces that demand excellence.</h6>
</div>
<!-- <div class="container-card">
                <img src="{{ asset('assets/img/upArrow.svg') }}" alt="upArrow">
                    <h6 class="fsz-24 fw-500 mt-40 wow fadeInUp slow" data-wow-delay="0.4s"> With a 3H hardness level, these surfaces are equipped with anti-fingerprint and anti-yellowing properties, ensuring your spaces stay pristine for longer.

                    </h6>
</div> -->
                </div>
            </div>
            <div class="imgs">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="sm-img wow zoomIn slow" data-wow-delay="0.2s">
                            <img src="{{ asset('assets/img/phoenix-edge/phoenix-edge-3.webp') }}" alt="" class="img-cover"
                                data-speed="1.5">
                        </div>
                        <div class="lg-img wow zoomIn slow" data-wow-delay="0.4s">
                            <img src="{{ asset('assets/img/phoenix-edge/phoenix-edge-4.webp') }}" alt="" class="img-cover"
                                data-speed="1.5">
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="lg-img wow zoomIn slow" data-wow-delay="0.4s">
                            <img src="{{ asset('assets/img/phoenix-edge/phoenix-edge-5.webp') }}" alt="" class="img-cover"
                                data-speed="1.5">
                        </div>
                        <div class="sm-img wow zoomIn slow" data-wow-delay="0.2s">
                            <img src="{{ asset('assets/img/phoenix-edge/phoenix-edge-6.webp') }}" alt="" class="img-cover"
                                data-speed="1.5">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sm-img wow zoomIn slow" data-wow-delay="0.2s">
                            <img src="{{ asset('assets/img/phoenix-edge/phoenix-edge-6.webp') }}" alt="" class="img-cover"
                                data-speed="1.5">
                        </div>
                        <div class="lg-img wow zoomIn slow" data-wow-delay="0.4s">
                            <img src="{{ asset('assets/img/phoenix-edge/phoenix-edge-2.webp') }}" alt="" class="img-cover"
                                data-speed="1.5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  End main-info  -->


    <!--  Start challenge  -->
    <section class="tc-challenge-style2">
        <div class="container">
            <h3 class="fsz-45 text-capitalize mb-60 js-splittext-lines"> PhoenixEdge Next Generation Collection</h3>
            <div class="text fsz-24 mb-100 wow fadeInUp slow" data-wow-delay="0.2s"> PhoenixEdge redefines surface design with EB technology, offering stunning high-gloss and super-matte finishes. Crafted with premium materials like MDF, HDF, and BirchPly, it comes in standard 8x4 ft dimensions and a palette of 40 sophisticated shades. Comes in thickness options of 16–25 mm. Advanced features include self-healing technology, fire resistance, anti-fingerprint, and anti-fading properties, ensuring durability and pristine aesthetics.
            </div>
        </div>
        <div class="content float_box_container">
            <div class="challenge-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="case-card">
                            <a href="{{ asset('assets/img/phoenix-edge/phoenix-edge-7.webp') }}" class="img" data-fancybox="cases">
                                <img src="{{ asset('assets/img/phoenix-edge/phoenix-edge-7.webp') }}" alt="" class="img-cover">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-card">
                            <a href="{{ asset('assets/img/phoenix-edge/phoenix-edge-8.webp') }}" class="img" data-fancybox="cases">
                                <img src="{{ asset('assets/img/phoenix-edge/phoenix-edge-8.webp') }}" alt="" class="img-cover">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-card">
                            <a href="{{ asset('assets/img/phoenix-edge/phoenix-edge-9.webp') }}" class="img" data-fancybox="cases">
                                <img src="{{ asset('assets/img/phoenix-edge/phoenix-edge-9.webp') }}" alt="" class="img-cover">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="float-cursor float_box"> Hold <br> and Drag </div>
        </div>
    </section>
    <!--  End challenge  -->


    <!--  Start testimonials  -->
    <section class="tc-testimonials-style2">
        <div class="container background-service">
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="testi-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="text js-splittext-lines"> “At Phoenix, we believe that innovation is the cornerstone of excellence. PhoenixEdge embodies this philosophy, offering the perfect fusion of durability and sophistication for the next generation of interiors.”
                                        </div>
                                        <div class="author-inf mt-50">
                                            <p class="fsz-18 fw-600"> Phoenix </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  End testimonials  -->


    <!--  Start main img  -->
    <div class="main-video" style="margin-top: 50px;">
        <video class="video" width="100%" height="100%" autoplay="" muted="" loop="">
            <source src="assets/img/s_project2/video.mp4" type="video/mp4">
        </video>
    </div>
    <!--  End main img  -->


    <!--  Start contact  -->
    <section class="tc-contact-style2 pb-5">
        <div class="container">
            <div class="row justify-content-around">
            <div class="col-lg-4">
                    <div class="info wow fadeInUp slow" data-wow-delay="0.2s">
                        <h3 class="fsz-45 fw-500 mb-50"> Let us help build your dream! </h3>
                        <p class="fsz-14 color-666 mt-15"> Your email address will not be published. <br>
                            Required fields are marked <span class="text-danger"> * </span> </p>

                        <div class="info-cards">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="item mt-50">
                                        <h6 class="fsz-24 mb-15 fw-bold"> Office Address</h6>
                                        <ul class="color-666 lh-6">
                                            <li> <a href="#"> F408, Laxmi Narayan Vihar, Madanganj, Kishangarh, Rajasthan 305801 </a> </li>
                                            <!--<li> <a href="#"> hello@phoenixsurface.com </a> </li>-->
                                            <li> <a href="#"> +91 80035 91308 </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item mt-50">
                                        <h6 class="fsz-24 mb-15 fw-bold"> Plant Address </h6>
                                        <ul class="color-666 lh-6">
                                            <li> <a href="#"> Kh. No. 313/1 & 316/1, near Indian Oil Petrol pump, Kishangarh, Rajasthan 305801 </a> </li>
                                            <!--<li> <a href="#"> hello@phoenixsurface.com </a> </li>-->
                                            <li> <a href="#"> +91 80035 91308 </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="social-icons mt-50">
                            <a href="https://in.pinterest.com/Phoenixsurfacesolution/"> <i class="fab fa-pinterest"></i> </a>
                            <a href="https://www.facebook.com/profile.php?id=61565419078609&amp;is_tour_dismissed"> <i class="fab fa-facebook-f"></i> </a>
                            <a href="https://www.instagram.com/phoenix.surfaces/"> <i class="fab fa-instagram"></i> </a>
                            <a href="https://www.linkedin.com/company/phoenix-surface-solutions/"> <i class="fab fa-linkedin-in"></i> </a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    @livewire('contact-form', ['pageName' => 'Cutting Edge PET-EB-Panels'])
                </div>
            </div>
        </div>
    </section>
    <!--  End contact  -->

@section('pagescripts')
<script src="{{ asset('assets/js/lib/mixitup.min.js') }}"></script>
<script src="{{ asset('assets/js/innerpages.js') }}"></script>
@endsection
    
@endcomponent