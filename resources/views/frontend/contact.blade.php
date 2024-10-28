@component('layouts.frontend')

    @section('bodyclass', 'inner-pages-style1 contact-pg-style1')

    @section('pagestyles')
    <link rel="stylesheet" href="{{ asset('assets/css/innerpages.css') }}">
    @endsection

    @section('breadcrumb')
    <header class="tc-inner-header-style1 pb-100">
        <div class="container">
            <div class="info">
                <h1 class="js-title"> contact </h1>
                <div class="text fsz-18 color-666"> We’d love to hear from you! <br> Reach out to us, and let’s create something amazing together. </div>
            </div>
        </div>
    </header>
    @endsection
    
    <!--  Start contact-info  -->
    <section class="tc-contact-info-style1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="info-cards">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="item mt-50">
                                    <h6 class="fsz-24 mb-15 fw-bold"> Rajasthan, IN</h6>
                                    <ul class="color-666 lh-6">
                                        <li> <a href="#"> Jaipur Gate, 123456 </a> </li>
                                        <li> <a href="#"> hello@phoenix.com </a> </li>
                                        <li> <a href="#"> +91 98765 43210 </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item mt-50">
                                    <h6 class="fsz-24 mb-15 fw-bold"> New Delhi, IN </h6>
                                    <ul class="color-666 lh-6">
                                        <li> <a href="#"> Sector 00, 123456 </a> </li>
                                        <li> <a href="#"> hello@phoenix.com </a> </li>
                                        <li> <a href="#"> +91 98765 43210 </a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="social-icons mt-50 text-lg-end">
                        <a href="https://in.pinterest.com/Phoenixsurfacesolution/"> <i class="fab fa-pinterest"></i> </a>
                        {{-- <a href="https://in.pinterest.com/Phoenixsurfacesolution/"> <i class="fab fa-x-twitter"></i> </a> --}}
                        <a href="https://www.facebook.com/profile.php?id=61565419078609&is_tour_dismissed"> <i class="fab fa-facebook-f"></i> </a>
                        <a href="https://www.instagram.com/phoenix.surfaces/"> <i class="fab fa-instagram"></i> </a>
                        <a href="https://www.linkedin.com/company/phoenix-surface-solutions/"> <i class="fab fa-linkedin-in"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  End contact-info  -->


    <!--  Start map  -->
    <section class="tc-map-style1">
        <div class="map-card wow zoomIn slow" data-wow-delay="0.2s">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14272.767169589379!2d74.82219872715172!3d26.57822011836817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396bf0e6c7385b49%3A0xf447f04771fcc35!2sIndianOil!5e0!3m2!1sen!2sin!4v1728972523776!5m2!1sen!2sin"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!--  End map  -->


    <!--  Start contact-form  -->
    <section class="tc-contact-form-style1">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="info wow fadeInUp slow" data-wow-delay="0.2s">
                        <h3 class="fsz-45 fw-500 mb-80"> Let us helps build your dream! </h3>
                        <p class="fsz-14 color-666 mt-15"> Your email address will not be published. <br>
                            Required fields are marked <span class="text-danger"> * </span> </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    @livewire('contact-form')
                </div>
            </div>
        </div>
        <img src="assets/img/contact_shap.png" alt="" class="shap">
    </section>
    <!--  End contact-form  -->

@section('pagescripts')
<script src="{{ asset('assets/js/innerpages.js') }}"></script>
@endsection
    
@endcomponent
