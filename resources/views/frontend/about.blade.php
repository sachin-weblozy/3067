@component('layouts.frontend')

    @section('bodyclass', 'inner-pages-style1 about-pg-style1')

    @section('pagestyles')
    <link rel="stylesheet" href="{{ asset('assets/css/innerpages.css') }}">
    @endsection

    @section('breadcrumb')
    <header class="tc-header-preview">
        <div class="slider-card">
            <div class="img">
                <img src="{{ asset('assets/img/about/header1.webp') }}" alt="" class="img-cover">
            </div>
            <div class="info">
                <div class="container">
                    <div class="row ps-lg-5">
                        <div class="col-lg-6">
                            <h1> About us </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @endsection
    
    <!--  Start about  -->
    <section class="tc-about-style7">
        <div class="container">
            <div class="row gx-0 justify-content-between">
                <div class="col-lg-3">
                    <div class="rotate-box" data-speed="1" data-lag="0.4">
                        <a href="#" class="rotate-circle fsz-30 rotate-text d-inline-block text-uppercase">
                            <svg class="textcircle" viewBox="0 0 500 500">
                                <defs>
                                    <path id="textcircle"
                                        d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z">
                                    </path>
                                </defs>
                                <text>
                                    <textPath xlink:href="#textcircle" textLength="900"> phoneix surface - phoneix surface - </textPath>
                                </text>
                            </svg>
                        </a>
                        <img src="{{ asset('assets/img/leaf.webp') }}" alt="" class="icon">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="info wow fadeInUp slow" data-wow-delay="0.2s">
                        <div class="text fsz-25 fw-500 mb-20">
                            Designing for the bold, built to last—Phoenix surfaces are a testament to quality, durability, and style.
                        </div>
                        <div class="text fsz-25 fw-500 mb-20">
                            From our state-of-the-art manufacturing facility in Rajasthan, India. We deliver an extensive range of products that elevate any space, combining creativity and resilience. Whether it’s our textured wood panels, UV-coated Boards, or EB- panels, we at Phoenix offer solutions that meet the demands of modern living without compromising on beauty or functionality.
                        </div>
                    </div>
                </div>
                <!--<div class="col-lg-2">-->
                <!--    <div class="numbers mt-5 mt-lg-0">-->
                <!--        <div class="number-card wow zoomIn slow" data-wow-delay="0.4s">-->
                <!--            <h2 class="numb"> 95% </h2>-->
                <!--            <small> customer satisfaction rate </small>-->
                <!--        </div>-->
                <!--        <div class="number-card wow zoomIn slow" data-wow-delay="0.6s">-->
                <!--            <h2 class="numb"> 100% </h2>-->
                <!--            <small> unique textures and finishes </small>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </section>
    <!--  End about  -->


    <!--  Start process  -->
    <section class="tc-process-style2">
        <div class="container">
            <h2 class="fsz-45 fw-500 mb-80 text-center"> Our Approach <span class="sub-font fst-italic color-orange1 fw-400"> process </span> </h2>
            <div class="content">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="accordion-side wow fadeInUp slow">
                            <div class="accordion" id="accordionProcess">
                                <div class="accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <span class="num"> 1 / </span> <h3> Innovation-Driven Design </h3>
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionProcess">
                                    <div class="accordion-body">
                                        <div class="text">
                                            From UV coating to Electron Beam (EB) curing, every product is designed with both aesthetic appeal and durability in mind.
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <div class="accordion-header" id="headingTwo">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        <span class="num"> 2 / </span> <h3> Precision Craftsmanship </h3>
                                    </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionProcess">
                                    <div class="accordion-body">
                                        <div class="text">
                                            Precision is the core of our product development, from textured Panels to high-gloss and super-matte finishes.
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <div class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        <span class="num"> 3 / </span> <h3> Sustainability at Heart </h3>
                                    </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionProcess">
                                    <div class="accordion-body">
                                        <div class="text">
                                            By utilizing eco-friendly materials and responsible manufacturing processes, Phoenix is reducing its environmental impact while delivering premium products.
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                        <span class="num"> 4 / </span> <h3> Customer-Centric Approach </h3>
                                    </button>
                                    </div>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionProcess">
                                    <div class="accordion-body">
                                        <div class="text">
                                            Our customers are at the heart of everything we do. From understanding specific design needs to offering personalized solutions, we ensure service beyond measure.
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="imgs">
                            <div class="img" data-lag="0.2">
                                <img src="{{ asset('assets/img/process/proc1.webp') }}" alt="" class="img-cover">
                                {{-- <span class="txt sub-font"> Design </span> --}}
                            </div>
                            <div class="img" data-lag="0.4">
                                <img src="{{ asset('assets/img/process/proc2.webp') }}" alt="" class="img-cover">
                                {{-- <span class="txt sub-font"> Handover </span> --}}
                            </div>
                            <div class="img" data-lag="0.3">
                                <img src="{{ asset('assets/img/process/proc3.webp') }}" alt="" class="img-cover">
                                {{-- <span class="txt sub-font"> Survey </span> --}}
                            </div>
                            <div class="img" data-lag="0.5">
                                <img src="{{ asset('assets/img/process/proc4.webp') }}" alt="" class="img-cover">
                                {{-- <span class="txt sub-font"> Implement </span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="assets/img/prc_bg.png" alt="" class="bg" data-speed="1.2">
    </section>
    <!--  End process  -->

    <!--  Start awards  -->
    {{-- <section class="tc-awards-style2">
        <div class="container">
            <h2 class="fsz-45 fw-500 text-center mb-30"> Featured <span class="sub-font fst-italic color-orange1 fw-400"> awards </span> </h2>
            <div class="awards">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="award-card wow fadeInUp slow" data-wow-delay="0.2s">
                            <div class="logo">
                                <img src="assets/img/logos/logo1.svg" alt="">
                            </div>
                            <h5 class="fsz-24 sub-font title"> Winner Best of Substainable Interior 2023 </h5>
                            <a href="#" class="color-666 text-capitalize"> Neoclassical Sofa </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="award-card wow fadeInUp slow" data-wow-delay="0.4s">
                            <div class="logo">
                                <img src="assets/img/logos/logo2.svg" alt="">
                            </div>
                            <h5 class="fsz-24 sub-font title"> Top 5 Interior Design Inspiration 2023 </h5>
                            <a href="#" class="color-666 text-capitalize"> ABERY Apartment Master Bedroom </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="award-card wow fadeInUp slow" data-wow-delay="0.6s">
                            <div class="logo">
                                <img src="assets/img/logos/logo3.svg" alt="">
                            </div>
                            <h5 class="fsz-24 sub-font title"> Top 10 Agency Use Sustainable Material </h5>
                            <a href="#" class="color-666 text-capitalize"> Neoclassical Sofa </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="award-card wow fadeInUp slow" data-wow-delay="0.8s">
                            <div class="logo">
                                <img src="assets/img/logos/logo4.svg" alt="">
                            </div>
                            <h5 class="fsz-24 sub-font title"> Winner Best CGI Artirst 2022 </h5>
                            <a href="#" class="color-666 text-capitalize"> Boston CGI </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="award-card wow fadeInUp slow" data-wow-delay="0.2s">
                            <div class="logo">
                                <img src="assets/img/logos/logo5.svg" alt="">
                            </div>
                            <h5 class="fsz-24 sub-font title"> Winner UID of The Year in 2020 </h5>
                            <a href="#" class="color-666 text-capitalize"> Bristo Restaurant </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="award-card wow fadeInUp slow" data-wow-delay="0.4s">
                            <div class="logo">
                                <img src="assets/img/logos/logo6.svg" alt="">
                            </div>
                            <h5 class="fsz-24 sub-font title"> Top 5 Excellent Furniture Store USA 2020 </h5>
                            <a href="#" class="color-666 text-capitalize"> Wooden Furniture </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="award-card wow fadeInUp slow" data-wow-delay="0.6s">
                            <div class="logo">
                                <img src="assets/img/logos/logo7.svg" alt="">
                            </div>
                            <h5 class="fsz-24 sub-font title"> Top 5 Excellent Furniture Store USA 2020 </h5>
                            <a href="#" class="color-666 text-capitalize"> Wooden Furniture </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="award-card wow fadeInUp slow" data-wow-delay="0.8s">
                            <div class="logo">
                                <img src="assets/img/logos/logo8.svg" alt="">
                            </div>
                            <h5 class="fsz-24 sub-font title"> Top 5 Excellent Furniture Store USA 2020 </h5>
                            <a href="#" class="color-666 text-capitalize"> Wooden Furniture </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--  End awards  -->

@section('pagescripts')
<script src="{{ asset('assets/js/innerpages.js') }}"></script>
@endsection
    
@endcomponent
