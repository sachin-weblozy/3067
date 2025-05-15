@component('layouts.frontend')

    @section('bodyclass', 'home-style1')

    @section('pagestyles')
    <link rel="stylesheet" href="{{ asset('assets/css/home_1_style.css') }}">
    @endsection

    @section('breadcrumb')
    <header class="tc-header-style1">
        <div class="header-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-card">
                        <div class="img">
                            <img src="{{ asset('assets/img/head_slide2.webp') }}" alt="" class="img-cover">
                        </div>
                        <div class="info section-padding-x pb-70">
                            <div class="row align-items-end gx-5">
                                <div class="col-lg-6 offset-lg-2">
                                    <h1 data-swiper-parallax="-2000" class="js-title"> phoenix </h1>
                                    <h5 class="fsz-30 mt-30 fw-400"> Redefining Your Space </h5>
                                </div>
                                <div class="col-lg-3">
                                    <div class="cont pb-30">
                                        <div class="text fsz-17 fw-300 lh-4">
                                            Bringing you world-class, high-quality Pre-Lam Wood Panels
                                        </div>
                                        <a href="{{ route('products') }}" class="butn border rounded-pill mt-60 hover-bg-white">
                                            <span> Our Products <i class="small ms-1 ti-arrow-top-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-card">
                        <div class="img">
                            <img src="{{ asset('assets/img/head_slide3.webp') }}" alt="" class="img-cover">
                        </div>
                        <div class="info section-padding-x pb-70">
                            <div class="row align-items-end gx-5">
                                <div class="col-lg-6 offset-lg-2">
                                    <h1 data-swiper-parallax="-2000" class="js-title"> phoenix </h1>
                                    <h5 class="fsz-30 mt-30 fw-400"> Premium UV Panels </h5>
                                </div>
                                <div class="col-lg-3">
                                    <div class="cont pb-30">
                                        <div class="text fsz-17 fw-300 lh-4">
                                            <span class="fw-bold">India's first 6-foot wide UV-coated Panels</span> Super Matte and High-Gloss
                                        </div>
                                        <a href="{{ route('products') }}" class="butn border rounded-pill mt-60 hover-bg-white">
                                            <span> Our Products <i class="small ms-1 ti-arrow-top-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-card">
                        <div class="img">
                            <img src="{{ asset('assets/img/head_slide4.webp') }}" alt="" class="img-cover">
                        </div>
                        <div class="info section-padding-x pb-70">
                            <div class="row align-items-end gx-5">
                                <div class="col-lg-6 offset-lg-2">
                                    <h1 data-swiper-parallax="-2000" class="js-title"> phoenix </h1>
                                    <h5 class="fsz-30 mt-30 fw-400"> Designed for Next Gen </h5>
                                </div>
                                <div class="col-lg-3">
                                    <div class="cont pb-30">
                                        <div class="text fsz-17 fw-300 lh-4">
                                            PET Electron Beam cured boards with self-healing, fire-resistant panels
                                        </div>
                                        <a href="{{ route('products') }}" class="butn border rounded-pill mt-60 hover-bg-white">
                                            <span> Our Products <i class="small ms-1 ti-arrow-top-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-controls">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </header>
    @endsection
    
    <!--  Start experience  -->
    <!--<section class="tc-experience-style1 section-padding-x">-->
    <!--    <div class="container-fluid">-->
    <!--        <div class="row justify-content-between align-items-center">-->
    <!--            <div class="col-lg-2">-->
    <!--                <div class="exp-num mb-100 wow zoomIn" data-wow-delay="0.3s">-->
    <!--                    <h5 class="fsz-18 text-uppercase"> happy <br> customers </h5>-->
    <!--                    <h2 class="num"> 100+ </h2>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3">-->
    <!--                <div class="img wow">-->
    <!--                    <img src="{{ asset('assets/img/expx.webp') }}" alt="" class="img-cover">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3">-->
    <!--                <div class="info wow fadeInUp" data-wow-delay="0.3s">-->
    <!--                    <h3 class="fsz-45 fw-600 mb-30"> Catering  to both modern and traditional aesthetics. </h3>-->
    <!--                    <div class="text fsz-15 color-666">-->
    <!--                        Redefining surfaces with India’s first fully automatic Pre-lam, UV, and PUR lines. Offering 120+ stunning designs and unmatched quality, our innovative sheets combine beauty and durability to cater to modern and traditional aesthetics alike.-->
    <!--                    </div>-->
    <!--                    <a href="#" class="butn rounded-pill mt-50 hover-bg-black bg-white">-->
    <!--                        <span> Explore More <i class="small ms-1 ti-arrow-top-right"></i> </span>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-2">-->
    <!--                <div class="rotate-txt justify-content-lg-end">-->
    <!--                    <ul>-->
    <!--                        <li>-->
    <!--                            <a href="#"> admin@phoenixsurface.com </a>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <a href="#"> +91 72597 23125 </a>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <img src="{{ asset('assets/img/c_line.png') }}" alt="" class="c-line wow">-->
    <!--</section>-->


    <!--  Start services  -->
    <section class="tc-services-style1">
        <div class="content section-padding section-padding-x">
            <div class="container">
                <div class="title mb-80 text-center">
                    <p class="color-666 text-uppercase wow"> our offerings </p>
                </div>
                <div class="services">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="{{ route('product.duralam') }}" class="service-card wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/icon_1.webp') }}" width="25px" />
                                </div>
                                <h5 class="fsz-24 mb-20"> DuraLam - Essential Pre-Laminated Panels </h5>
                                <div class="img">
                                    <img src="{{ asset('assets/img/services/duralam-essential-pre-laminated-panels.webp') }}" alt="" class="img-cover">
                                </div>
                                <div class="text mt-50">
                                    Explore among countless shades, styles, and designs. That satisfies all your essential needs.
                                </div>
                                <span class="arrow"> <i class="ti-arrow-top-right"></i> </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="{{ route('product.opulum') }}" class="service-card wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/icon_2.webp') }}" width="25px" />
                                </div>
                                <h5 class="fsz-24 mb-20"> Opulum - Exclusive Pre-Laminated Panels </h5>
                                <div class="img">
                                    <img src="{{ asset('assets/img/services/opulum-exclusive-pre-laminated-panels.webp') }}" alt="" class="img-cover">
                                </div>
                                <div class="text mt-50">
                                    Exclusive range of shades made from imported Paper, Especially curated collection for the ones with Finer Tastes.
                                </div>
                                <span class="arrow"> <i class="ti-arrow-top-right"></i> </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="{{ route('product.textura') }}" class="service-card wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/icon_3.webp') }}" width="25px" />
                                </div>
                                <h5 class="fsz-24 mb-20"> Textura - 6Ft Wide Textured Panels </h5>
                                <div class="img">
                                    <img src="{{ asset('assets/img/services/textura-textured-pre-laminated-panels.webp') }}" alt="" class="img-cover">
                                </div>
                                <div class="text mt-50">
                                    Now you can feel what you see with our textured panels, available on all Prelam Shades.
                                </div>
                                <span class="arrow"> <i class="ti-arrow-top-right"></i> </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="{{ route('product.uvfinishes') }}" class="service-card wow fadeInUp" data-wow-delay="0.8s">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/icon_4.webp') }}" width="25px" />
                                </div>
                                <h5 class="fsz-24 mb-20"> The Velvet Collection </h5>
                                <div class="img">
                                    <img src="{{ asset('assets/img/services/uv-finishes.webp') }}" alt="" class="img-cover">
                                </div>
                                <div class="text mt-50">
                                    Luxurious Matte & Gloss UV Panels with smooth, Morden, and Classic finishes panels available up to 6 ft Width.
                                </div>
                                <span class="arrow"> <i class="ti-arrow-top-right"></i> </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="{{ route('product.lucentacrylic') }}" class="service-card wow fadeInUp" data-wow-delay="0.8s">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/icon_5.webp') }}" width="25px" />
                                </div>
                                <h5 class="fsz-24 mb-20"> LucentAcrylic - Acrylic Finishes (8'x4')</h5>
                                <div class="img">
                                    <img src="{{ asset('assets/img/services/lucentacrylic-acrylic-finishes.webp') }}" alt="" class="img-cover">
                                </div>
                                <div class="text mt-50">
                                    High-Clarity High-Durability Acrylic Sheets that add color and vibrance to any space deemed fit
                                </div>
                                <span class="arrow"> <i class="ti-arrow-top-right"></i> </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="{{ route('product.cuttingedge') }}" class="service-card wow fadeInUp" data-wow-delay="0.8s">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/icon_6.webp') }}" width="25px" />
                                </div>
                                <h5 class="fsz-24 mb-20"> PhoenixEdge - The Next Gen (8'x4')</h5>
                                <div class="img">
                                    <img src="{{ asset('assets/img/services/cutting-edge-pet-eb-panels.webp') }}" alt="" class="img-cover">
                                </div>
                                <div class="text mt-50">
                                    Super Elegant Finishes along with Anti-Finger, High Stain Resistance, High Scratch Resistance, and many such features
                                </div>
                                <span class="arrow"> <i class="ti-arrow-top-right"></i> </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('products') }}" class="butn rounded-pill mt-80 hover-bg-black bg-orange1 text-white">
                        <span> Explore More <i class="small ms-1 ti-arrow-top-right"></i> </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="ser-img">
            <img src="{{ asset('assets/img/services/sers.webp') }}" alt="">
        </div>
    </section>
    <!--  End services  -->


    <!--  Start process  -->
    <section class="tc-process-style1">
        <div class="container">
            <div class="title mb-100 text-center">
                <h2 class="fsz-45"> Why India Loves Phoenix </h2>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="info">
                            <div class="accordion wow fadeInUp slow" id="accordionProcess">
                                <div class="accordion-item">
                                  <div class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <span class="num"> 1 / </span> <h3> Endless Design Options </h3>
                                    </button>
                                  </div>
                                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionProcess">
                                    <div class="accordion-body">
                                        <div class="text">
                                            With over 120 stunning styles, Phoenix offers choices for every taste and need.
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <div class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        <span class="num"> 2 / </span> <h3> Top-Notch Quality </h3>
                                    </button>
                                  </div>
                                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionProcess">
                                    <div class="accordion-body">
                                        <div class="text">
                                            Premium Material and advanced technology ensure products that last to impress.
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <div class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        <span class="num"> 3 / </span> <h3> Customer-Centric Approach </h3>
                                    </button>
                                  </div>
                                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionProcess">
                                    <div class="accordion-body">
                                        <div class="text">
                                            Reliable service and accessible solutions make Phoenix a favorite across India.
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <a href="#" class="butn border rounded-pill mt-80 color-orange1 border-orange1 hover-bg-orange1">
                                <span> Contact Us <i class="small ms-1 ti-arrow-top-right"></i> </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-2">
                        <div class="img wow">
                            <img src="{{ asset('assets/img/processd.webp') }}" alt="" class="img-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/c_line2.png') }}" alt="" class="c-line wow">
    </section>
    <!--  End process  -->


    <!--  Start projects  -->
    <section class="tc-projects-style1">
        <div class="container">
            <div class="title mb-70">
                <h2 class="fsz-45"> Gallery </h2>
            </div>
            {{-- <div class="tabs-links mb-50">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-proj1-tab" data-bs-toggle="pill" data-bs-target="#pills-proj1" type="button">Wood</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-proj2-tab" data-bs-toggle="pill" data-bs-target="#pills-proj2" type="button">Laminates</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-proj3-tab" data-bs-toggle="pill" data-bs-target="#pills-proj1" type="button">Interior</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-proj4-tab" data-bs-toggle="pill" data-bs-target="#pills-proj2" type="button">Landscape</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-proj5-tab" data-bs-toggle="pill" data-bs-target="#pills-proj1" type="button">Furniture</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 mt-4 mt-lg-0 text-lg-end">
                        <a href="#" class="butn border rounded-pill color-orange1 border-orange1 hover-bg-orange1">
                            <span> See All Projects <i class="small ms-1 ti-arrow-top-right"></i> </span>
                        </a>
                    </div>
                </div>
            </div> --}}
            <div class="projects">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-proj1" role="tabpanel" aria-labelledby="pills-proj1-tab">
                        <div class="projects-content float_box_container">
                            <div class="projects-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="{{ asset('assets/img/projects/proj8.webp') }}" class="img" data-fancybox="proj">
                                                <img src="{{ asset('assets/img/projects/proj8.webp') }}" alt="" class="img-cover">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="{{ asset('assets/img/projects/proj2.webp') }}" class="img" data-fancybox="proj">
                                                <img src="{{ asset('assets/img/projects/proj2.webp') }}" alt="" class="img-cover">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="{{ asset('assets/img/projects/proj3.webp') }}" class="img" data-fancybox="proj">
                                                <img src="{{ asset('assets/img/projects/proj3.webp') }}" alt="" class="img-cover">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="{{ asset('assets/img/projects/proj1.webp') }}" class="img" data-fancybox="proj">
                                                <img src="{{ asset('assets/img/projects/proj1.webp') }}" alt="" class="img-cover">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="{{ asset('assets/img/projects/proj5.webp') }}" class="img" data-fancybox="proj">
                                                <img src="{{ asset('assets/img/projects/proj5.webp') }}" alt="" class="img-cover">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="{{ asset('assets/img/projects/proj6.webp') }}" class="img" data-fancybox="proj">
                                                <img src="{{ asset('assets/img/projects/proj6.webp') }}" alt="" class="img-cover">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="{{ asset('assets/img/projects/proj7.webp') }}" class="img" data-fancybox="proj">
                                                <img src="{{ asset('assets/img/projects/proj7.webp') }}" alt="" class="img-cover">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="{{ asset('assets/img/projects/proj4.webp') }}" class="img" data-fancybox="proj">
                                                <img src="{{ asset('assets/img/projects/proj4.webp') }}" alt="" class="img-cover">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="float-cursor float_box"> Hold <br> and Drag </div>
                            <!-- <div class="float_box_container">
                                <div class="float-cursor float_box"> Hold <br> and Drag </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-proj2" role="tabpanel" aria-labelledby="pills-proj2-tab">
                        <div class="projects-content float_box_container">
                            <div class="projects-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="assets/img/projects/proj3.jpg') }}" class="img" data-fancybox="proj">
                                                <img src="{{ asset('assets/img/projects/proj3.jpg') }}" alt="" class="img-cover">
                                            </a>
                                            <div class="info">
                                                <div class="tags">
                                                    <a href="#"> Architecture </a>
                                                    <a href="#"> Furniture </a>
                                                </div>
                                                <h3 class="title"> <a href="#"> B63 Private Villa </a> </h3>
                                                <div class="text"> This area will is short description of project, you can select to show or hide it, <br> this a sample short paragraph for this. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="assets/img/projects/proj1.jpg') }}" class="img" data-fancybox="proj">
                                                <img src="{{ asset('assets/img/projects/proj1.jpg') }}" alt="" class="img-cover">
                                            </a>
                                            <div class="info">
                                                <div class="tags">
                                                    <a href="#"> Architecture </a>
                                                    <a href="#"> Furniture </a>
                                                </div>
                                                <h3 class="title"> <a href="#"> Townhouse in San Joe </a> </h3>
                                                <div class="text"> This area will is short description of project, you can select to show or hide it, <br> this a sample short paragraph for this. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="assets/img/projects/proj1.jpg') }}" class="img" data-fancybox="proj">
                                                <img src="{{ asset('assets/img/projects/proj1.jpg') }}" alt="" class="img-cover">
                                            </a>
                                            <div class="info">
                                                <div class="tags">
                                                    <a href="#"> Architecture </a>
                                                    <a href="#"> Furniture </a>
                                                </div>
                                                <h3 class="title"> <a href="#"> Townhouse in San Joe </a> </h3>
                                                <div class="text"> This area will is short description of project, you can select to show or hide it, <br> this a sample short paragraph for this. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="assets/img/projects/proj2.jpg') }}" class="img" data-fancybox="proj">
                                                <img src="{{ asset('assets/img/projects/proj2.jpg') }}" alt="" class="img-cover">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="float-cursor float_box"> Hold <br> and Drag </div>
                            <!-- <div class="float_box_container">
                                <div class="float-cursor float_box"> Hold <br> and Drag </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  End projects  -->


    <!--  Start testimonials  -->
    <section class="tc-testimonials-style1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h6 class="fsz-18 text-uppercase lh-4"> what clients say <br> about us </h6>
                    <div class="lg-icon color-orange1"> <i class="la la-quote-right"></i> </div>
                </div>
                <div class="col-lg-8">
                    <div class="tc-clients-style1">
                        <div class="clients-slider1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="clients-card">
                                        <div class="text fsz-45 fw-600 lh-2 js-splittext-lines">
                                            “Phoenix laminates transformed my living room! The quality is top-notch, and the designs cater perfectly to my modern aesthetic. Highly recommended!”
                                        </div>
                                        <div class="author">
                                            <div class="au-img">
                                                <img src="{{ asset('assets/img/team/team1.jpg') }}" alt="" class="img-cover">
                                            </div>
                                            <div class="au-inf">
                                                <h6 class="text-capitalize mb-2 fsz-16 fw-bold"> Ramesh V </h6>
                                                <p class="text-capitalize fsz-14 color-666"> Interior Designer  </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="clients-card">
                                        <div class="text fsz-45 fw-600 lh-2 js-splittext-lines">
                                            “We used Phoenix laminates for our new office space, and the results are stunning. The UV-coated panels are both durable and sleek. It was exactly what we needed.”
                                        </div>
                                        <div class="author">
                                            <div class="au-img">
                                                <img src="{{ asset('assets/img/team/team1.jpg') }}" alt="" class="img-cover">
                                            </div>
                                            <div class="au-inf">
                                                <h6 class="text-capitalize mb-2 fsz-16 fw-bold"> Priya S. </h6>
                                                <p class="text-capitalize fsz-14 color-666"> Architect  </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="clients-card">
                                        <div class="text fsz-45 fw-600 lh-2 js-splittext-lines">
                                            “From traditional wood grains to bold geometric patterns, Phoenix has something for every project. The finishes are flawless, and their customer service is fantastic!”
                                        </div>
                                        <div class="author">
                                            <div class="au-img">
                                                <img src="{{ asset('assets/img/team/team1.jpg') }}" alt="" class="img-cover">
                                            </div>
                                            <div class="au-inf">
                                                <h6 class="text-capitalize mb-2 fsz-16 fw-bold"> Sameer K. </h6>
                                                <p class="text-capitalize fsz-14 color-666"> Furniture Manufacturer  </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-controls">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="marq-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#"> Creative </a>
                </div>
                <div class="swiper-slide">
                    <a href="#"> Flexiable </a>
                </div>
                <div class="swiper-slide">
                    <a href="#"> Dedicated </a>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/c_line3.png') }}" alt="" class="c-line">
    </section>
    <!--  End testimonials  -->



    <!--  Start chat  -->
    <section class="tc-chat-style1" style="background-image:url('assets/img/prc_bg.png')">
        <div class="container">
            <div class="content">
                <a href="#" class="xl-text"> hello@phoenixsurface.com </a>
                <h5 class="mb-50 lh-5"> Let us help your dream <br> become reality </h5>
            </div>
        </div>
        <img src="{{ asset('assets/img/c_line4.png') }}" alt="" class="c-line wow">
    </section>
    <!--  End chat  -->

@section('pagescripts')
<script src="{{ asset('assets/js/home_1_scripts.js') }}"></script>
@endsection
    
@endcomponent
