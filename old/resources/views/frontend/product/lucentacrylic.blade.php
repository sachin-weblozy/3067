@component('layouts.frontend')

    @section('bodyclass', 'inner-pages-style1 s-project-pg-style2')

    @section('pagestyles')
    <link rel="stylesheet" href="{{ asset('assets/css/innerpages.css') }}">
    @endsection

    @section('breadcrumb')

    <header class="s-header-style2">
        <div class="container">
            <div class="info">
                <h1 class="title">Lucent Acrylic Finishes </h1>
            </div>
        </div>
        <img src="{{ asset('assets/img/lucent-acrylic/lucent-acrylics-1.webp') }}" alt="" class="bg img-cover" data-speed="1.25">
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
                    <h6 class="fsz-24 fw-500 mt-4 mt-lg-0 wow fadeInUp slow" data-wow-delay="0.2s"> LucentAcrylic redefines pre-laminated surfaces with its premium acrylic panels, designed for impeccable style and superior performance. With over 70+ shades to choose from, these panels deliver sleek aesthetics paired with innovative features like anti-fingerprint, anti-scratch, and moisture resistance.  </h6>
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
                            <img src="{{ asset('assets/img/lucent-acrylic/lucent-acrylics-2.webp') }}" alt="" class="img-cover"
                                data-speed="1.5">
                        </div>
                        <div class="lg-img wow zoomIn slow" data-wow-delay="0.4s">
                            <img src="{{ asset('assets/img/lucent-acrylic/lucent-acrylics-3.webp') }}" alt="" class="img-cover"
                                data-speed="1.5">
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="lg-img wow zoomIn slow" data-wow-delay="0.4s">
                            <img src="{{ asset('assets/img/lucent-acrylic/lucent-acrylics-4.webp') }}" alt="" class="img-cover"
                                data-speed="1.5">
                        </div>
                        <div class="sm-img wow zoomIn slow" data-wow-delay="0.2s">
                            <img src="{{ asset('assets/img/lucent-acrylic/lucent-acrylics-5.webp') }}" alt="" class="img-cover"
                                data-speed="1.5">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sm-img wow zoomIn slow" data-wow-delay="0.2s">
                            <img src="{{ asset('assets/img/lucent-acrylic/lucent-acrylics-6.webp') }}" alt="" class="img-cover"
                                data-speed="1.5">
                        </div>
                        <div class="lg-img wow zoomIn slow" data-wow-delay="0.4s">
                            <img src="{{ asset('assets/img/lucent-acrylic/lucent-acrylics-7.webp') }}" alt="" class="img-cover"
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
            <h3 class="fsz-45 text-capitalize mb-60 js-splittext-lines"> Phoenix LucentAcrylic Collection </h3>
            <div class="text fsz-24 mb-100 wow fadeInUp slow" data-wow-delay="0.2s"> Crafted with durable MDF, HDF, BirchPly, and more, LucentAcrylic panels are designed for versatility and strength. Available in a convenient 8x4 ft size, they cater to diverse interior needs like cabinetry and wall paneling. With 70+ shades, including vibrant solids and modern prints, they offer endless design possibilities. Advanced features like 6H hardness, anti-fingerprint, anti-scratch, moisture resistance, and anti-yellowing technology ensure lasting beauty and minimal maintenance.
            </div>
        </div>
        <div class="content float_box_container">
            <div class="challenge-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="case-card">
                            <a href="{{ asset('assets/img/lucent-acrylic/lucent-acrylics-7.webp') }}" class="img" data-fancybox="cases">
                                <img src="{{ asset('assets/img/lucent-acrylic/lucent-acrylics-7.webp') }}" alt="" class="img-cover">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-card">
                            <a href="{{ asset('assets/img/lucent-acrylic/lucent-acrylics-1.webp') }}" class="img" data-fancybox="cases">
                                <img src="{{ asset('assets/img/lucent-acrylic/lucent-acrylics-1.webp') }}" alt="" class="img-cover">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-card">
                            <a href="{{ asset('assets/img/lucent-acrylic/lucent-acrylics-9.webp') }}" class="img" data-fancybox="cases">
                                <img src="{{ asset('assets/img/lucent-acrylic/lucent-acrylics-9.webp') }}" alt="" class="img-cover">
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
                                        <div class="text js-splittext-lines"> “At Phoenix, we bring together timeless beauty and cutting-edge technology to create surfaces that inspire. The LucentAcrylic Collection is our commitment to delivering panels that are as stunning as they are strong.”
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
    <div class="main-video">
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
                    @livewire('contact-form', ['pageName' => 'Lucent Acrylic Finishes'])
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