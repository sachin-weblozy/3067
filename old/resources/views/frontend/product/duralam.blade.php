@component('layouts.frontend')

    @section('bodyclass', 'inner-pages-style1 s-project-pg-style2')

    @section('pagestyles')
    <link rel="stylesheet" href="{{ asset('assets/css/innerpages.css') }}">
    @endsection

    @section('breadcrumb')

    <header class="s-header-style2">
        <div class="container">
            <div class="info">
                <h1 class="title">Duralam Essential Pre Laminated Panels </h1>
            </div>
        </div>
        <img src="{{ asset('assets/img/duralam/duralam-1.jpg') }}" alt="" class="bg img-cover" data-speed="1.25">
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
                    <h6 class="fsz-24 fw-500 mt-4 mt-lg-0 wow fadeInUp slow" data-wow-delay="0.2s"> Combining state-of-the-art automation with unmatched versatility, DURALAM offers superior pre-laminated boards crafted to perfection. Enhancing Every Space with Precision-Engineered Pre-Laminated Boards</h6>
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
                            <img src="{{ asset('assets/img/duralam/duralam-3.webp') }}" alt="" class="img-cover"
                                data-speed="1.5">
                        </div>
                        <div class="lg-img wow zoomIn slow" data-wow-delay="0.4s">
                            <img src="{{ asset('assets/img/duralam/duralam-4.webp') }}" alt="" class="img-cover"
                                data-speed="1.5">
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="lg-img wow zoomIn slow" data-wow-delay="0.4s">
                            <img src="{{ asset('assets/img/duralam/duralam-5.webp') }}" alt="" class="img-cover"
                                data-speed="1.5">
                        </div>
                        <div class="sm-img wow zoomIn slow" data-wow-delay="0.2s">
                            <img src="{{ asset('assets/img/duralam/duralam-6.webp') }}" alt="" class="img-cover"
                                data-speed="1.5">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sm-img wow zoomIn slow" data-wow-delay="0.2s">
                            <img src="{{ asset('assets/img/duralam/duralam-6.webp') }}" alt="" class="img-cover"
                                data-speed="1.5">
                        </div>
                        <div class="lg-img wow zoomIn slow" data-wow-delay="0.4s">
                            <img src="{{ asset('assets/img/duralam/duralam-2.webp') }}" alt="" class="img-cover"
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
            <h3 class="fsz-45 text-capitalize mb-60 js-splittext-lines"> Phoenix DURALAM Collection</h3>
            <div class="text fsz-24 mb-100 wow fadeInUp slow" data-wow-delay="0.2s"> DURALAM pre-laminated boards redefine quality and aesthetics. Choose from MDF (Interior and Exterior Grade), Particle Board, HDHMR, or Eco HDF boards in thicknesses from 3mm to 30mm. Available in standard dimensions: 8x4, 8x6, 9x6, 6x4, and 6x3. Enhance your spaces with Sued, Gloss, or Matte finishes, solid colors to designer prints like marble and wood grains offering both elegance and durability.
                
            </div>
        </div>
        <div class="content float_box_container">
            <div class="challenge-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="case-card">
                            <a href="{{ asset('assets/img/duralam/duralam-7.webp') }}" class="img" data-fancybox="cases">
                                <img src="{{ asset('assets/img/duralam/duralam-7.webp') }}" alt="" class="img-cover">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-card">
                            <a href="{{ asset('assets/img/duralam/duralam-8.webp') }}" class="img" data-fancybox="cases">
                                <img src="{{ asset('assets/img/duralam/duralam-8.webp') }}" alt="" class="img-cover">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-card">
                            <a href="{{ asset('assets/img/duralam/duralam-9.webp') }}" class="img" data-fancybox="cases">
                                <img src="{{ asset('assets/img/duralam/duralam-9.webp') }}" alt="" class="img-cover">
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
                                        <div class="text js-splittext-lines"> “Phoenix is more than simply a manufacturer; we are a brand that is inspired by the goal of transforming environments with items that are both elegant and durable. In addition to adding flair to your interiors, our Pre-Laminated Boards are constructed with longevity in mind. They are created with an eye toward style as well as functionality.”
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
                                        <h6 class="fsz-24 mb-15 fw-bold"> Rajasthan, IN</h6>
                                        <ul class="color-666 lh-6">
                                            <li> <a href="#"> Jaipur Gate, 123456 </a> </li>
                                            <li> <a href="#"> hello@phoenix.com </a> </li>
                                            <li> <a href="#"> +91 80035 91308 </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item mt-50">
                                        <h6 class="fsz-24 mb-15 fw-bold"> New Delhi, IN </h6>
                                        <ul class="color-666 lh-6">
                                            <li> <a href="#"> Sector 00, 123456 </a> </li>
                                            <li> <a href="#"> hello@phoenix.com </a> </li>
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
                    @livewire('contact-form', ['pageName' => 'Duralam Essential Pre Laminated Panels'])
                </div>
            </div>
        </div>
        {{-- <div class="marq-content float_box_container">
            <div class="marq-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#"> Next Cases </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"> Next Cases </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"> Next Cases </a>
                    </div>
                </div>
                <div class="float-cursor float_box"> <i class="icon fat fa-arrow-up-right"></i> </div>
            </div>
        </div> --}}
    </section>
    <!--  End contact  -->

@section('pagescripts')
<script src="{{ asset('assets/js/lib/mixitup.min.js') }}"></script>
<script src="{{ asset('assets/js/innerpages.js') }}"></script>
@endsection
    
@endcomponent