@component('layouts.frontend')

    @section('bodyclass', 'inner-pages-style1 portfolio-pg-style1')

    @section('pagestyles')
    <link rel="stylesheet" href="{{ asset('assets/css/innerpages.css') }}">
    @endsection

    @section('breadcrumb')
    <header class="tc-inner-header-style1" style="background-image: url({{ asset('assets/img/breadcrumb6.webp') }})">
        <div class="container">
            <div class="info col-lg-7">
                <h1 class="js-title text-white"> products </h1>
                <div class="text fsz-18 text-white"> Products crafted for those who demand the best. </div>
            </div>
        </div>
    </header>
    @endsection
    
    <!--  Start latest-cases  -->
    <section class="tc-latest-cases-style1">
        <div class="container">
            <div class="content">
                <h3 class="fsz-45 text-capitalize mb-90 js-splittext-lines"> Our Offerings </h3>
                <div class="cases">
                    <div class="cases-content wow fadeInUp slow" data-wow-delay="0.4s">
                        <div class="row mixitup">
                            <div class="col-lg-4 mix-item">
                                <div class="case-card">
                                    <a href="{{ route('product.duralam') }}" class="img">
                                        <img src="{{ asset('assets/img/services/duralam-essential-pre-laminated-panels.webp') }}" alt="" class="img-cover">
                                    </a>
                                    <div class="info">
                                        <h3 class="title fsz-35 mb-20"> <a href="{{ route('product.duralam') }}" class="hover-orange1">
                                            DuraLam - Essential Pre-Laminated Panels </a> </h3>
                                        <div class="text color-666"> Durable and versatile panels available in 75+ shades and multiple finishes, perfect for essential pre-lamination needs. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix-item">
                                <div class="case-card">
                                    <a href="{{ route('product.opulum') }}" class="img">
                                        <img src="{{ asset('assets/img/services/opulum-exclusive-pre-laminated-panels.webp') }}" alt="" class="img-cover">
                                    </a>
                                    <div class="info">
                                        <h3 class="title fsz-35 mb-20"> <a href="{{ route('product.opulum') }}" class="hover-orange1">
                                            Opulum - Exclusive Pre-Laminated Panels </a> </h3>
                                        <div class="text color-666"> Premium pre-laminated panels with refined finishes and 45+ shades, designed to elevate your interiors.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix-item">
                                <div class="case-card">
                                    <a href="{{ route('product.textura') }}" class="img">
                                        <img src="{{ asset('assets/img/services/textura-textured-pre-laminated-panels.webp') }}" alt="" class="img-cover">
                                    </a>
                                    <div class="info">
                                        <h3 class="title fsz-35 mb-20"> <a href="{{ route('product.textura') }}" class="hover-orange1">
                                            Textura - Textured Pre-Laminated Panels (6') </a> </h3>
                                        <div class="text color-666"> Unique textured panels with 4 patterns, combining aesthetics and functionality for a bold look. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix-item">
                                <div class="case-card">
                                    <a href="{{ route('product.uvfinishes') }}" class="img">
                                        <img src="{{ asset('assets/img/services/uv-finishes.webp') }}" alt="" class="img-cover">
                                    </a>
                                    <div class="info">
                                        <h3 class="title fsz-35 mb-20"> <a href="{{ route('product.uvfinishes') }}" class="hover-orange1">
                                            UV Finishes - India’s First 6th Width </a> </h3>
                                        <div class="text color-666"> Super stunning matte & gloss UV panels offer a captivating modern look. Both are available up to 6’ Width. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix-item">
                                <div class="case-card">
                                    <a href="{{ route('product.lucentacrylic') }}" class="img">
                                        <img src="{{ asset('assets/img/services/lucentacrylic-acrylic-finishes.webp') }}" alt="" class="img-cover">
                                    </a>
                                    <div class="info">
                                        <h3 class="title fsz-35 mb-20"> <a href="{{ route('product.lucentacrylic') }}" class="hover-orange1">
                                            LucentAcrylic - Acrylic Finishes (8'x4') </a> </h3>
                                        <div class="text color-666"> Acrylic panels with 70+ shades, anti-scratch, anti-yellowing, and moisture-resistant properties for long-lasting beauty.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix-item">
                                <div class="case-card">
                                    <a href="{{ route('product.cuttingedge') }}" class="img">
                                        <img src="{{ asset('assets/img/services/cutting-edge-pet-eb-panels.webp') }}" alt="" class="img-cover">
                                    </a>
                                    <div class="info">
                                        <h3 class="title fsz-35 mb-20"> <a href="{{ route('product.cuttingedge') }}" class="hover-orange1">
                                            PhoenixEdge - The Next Gen (8'x4') </a> </h3>
                                        <div class="text color-666"> Cutting-edge PET-EB panels with self-healing, fire resistance, and a longer lifespan, available in high-gloss and super-matte finishes.
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
    <!--  End latest-cases  -->

@section('pagescripts')
<script src="{{ asset('assets/js/innerpages.js') }}"></script>
@endsection
    
@endcomponent
