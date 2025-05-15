@component('layouts.frontend')

    @section('bodyclass', 'inner-pages-style1 contact-pg-style1')

    @section('pagestyles')
    <link rel="stylesheet" href="{{ asset('assets/css/innerpages.css') }}">
    @endsection

    @section('breadcrumb')
    <header class="tc-inner-header-style1 pb-100"  style="background-image: url({{ asset('assets/img/breadcrumb2.webp') }})">
        <div class="container">
            <div class="info">
                <h1 class="js-title text-white"> contact </h1>
                <div class="text fsz-18 text-white"> We’d love to hear from you! <br> Reach out to us, and let’s create something amazing together. </div>
            </div>
        </div>
    </header>
    @endsection
<!--https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3005.9805671426557!2d74.8447544!3d26.5795602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396bf1000b86129b%3A0xc3e2fa0cc26b627b!2sPhoenix%20Surface%20Solutions%20HQ!5e1!3m2!1sen!2sin!4v1730106348960!5m2!1sen!2sin-->
    <!-- Start map -->
    <section class="tc-map-style1">
        <div class="map-card wow zoomIn slow" data-wow-delay="0.2s">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3568.1500402353863!2d74.84217947525966!3d26.579560176847338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396bf1000b86129b%3A0xc3e2fa0cc26b627b!2sPhoenix%20Surface%20Solutions%20HQ!5e0!3m2!1sen!2sin!4v1740139475962!5m2!1sen!2sin"
        width="100%" height="100%" style="border:0; filter: contrast(1) brightness(1);" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </section>
    <!-- End map -->

    <!-- Start contact-form -->
    <section class="tc-contact-form-style1">
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

                        <div class="social-icons mt-50">
                            <a href="https://in.pinterest.com/Phoenixsurfacesolution/"> <i class="fab fa-pinterest"></i> </a>
                            <a href="https://www.facebook.com/profile.php?id=61565419078609&amp;is_tour_dismissed"> <i class="fab fa-facebook-f"></i> </a>
                            <a href="https://www.instagram.com/phoenix.surfaces/"> <i class="fab fa-instagram"></i> </a>
                            <a href="https://www.linkedin.com/company/phoenix-surface-solutions/"> <i class="fab fa-linkedin-in"></i> </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    @livewire('contact-form', ['pageName' => 'Contact Page'])
                </div>
            </div>
        </div>
        <img src="assets/img/contact_shap.png" alt="" class="shap">
    </section>
    <!-- End contact-form -->

    @section('pagescripts')
    <script src="{{ asset('assets/js/innerpages.js') }}"></script>
    @endsection

@endcomponent
