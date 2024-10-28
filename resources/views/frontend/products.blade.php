@component('layouts.frontend')

    @section('bodyclass', 'inner-pages-style1 portfolio-pg-style1')

    @section('pagestyles')
    <link rel="stylesheet" href="{{ asset('assets/css/innerpages.css') }}">
    @endsection

    @section('breadcrumb')
    <header class="tc-inner-header-style1">
        <div class="container">
            <div class="info col-lg-7">
                <h1 class="js-title"> products </h1>
                <div class="text fsz-18 color-666"> Products crafted for those who demand the best. </div>
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
                                    <a href="{{ route('product.plb') }}" class="img">
                                        <img src="{{ asset('assets/img/services/pre-laminated-boards.webp') }}" alt="" class="img-cover">
                                    </a>
                                    <div class="info">
                                        <h3 class="title fsz-35 mb-20"> <a href="{{ route('product.plb') }}" class="hover-orange1">
                                            Pre-Laminated Boards </a> </h3>
                                        <div class="text color-666"> Pre-finished with a decorative surface, they are ready to install without the need for further treatments. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix-item">
                                <div class="case-card">
                                    <a href="{{ route('product.tl') }}" class="img">
                                        <img src="{{ asset('assets/img/services/textured-laminates.webp') }}" alt="" class="img-cover">
                                    </a>
                                    <div class="info">
                                        <h3 class="title fsz-35 mb-20"> <a href="{{ route('product.tl') }}" class="hover-orange1">
                                            Textured Laminates </a> </h3>
                                        <div class="text color-666"> Adds a tactile richness with a variety of finishes including wood grains, fabric-inspired surfaces, and geometric patterns.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix-item">
                                <div class="case-card">
                                    <a href="{{ route('product.uv') }}" class="img">
                                        <img src="{{ asset('assets/img/services/uv-coated-laminates.webp') }}" alt="" class="img-cover">
                                    </a>
                                    <div class="info">
                                        <h3 class="title fsz-35 mb-20"> <a href="{{ route('product.uv') }}" class="hover-orange1">
                                            UV-Coated Laminates </a> </h3>
                                        <div class="text color-666"> Comes in both High Gloss and Super Matte finishes, offering a sleek, polished look with anti-fingerprint and anti-yellowing properties </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix-item">
                                <div class="case-card">
                                    <a href="{{ route('product.pet') }}" class="img">
                                        <img src="{{ asset('assets/img/services/pet-boards.webp') }}" alt="" class="img-cover">
                                    </a>
                                    <div class="info">
                                        <h3 class="title fsz-35 mb-20"> <a href="{{ route('product.pet') }}" class="hover-orange1">
                                            PET – EB Boards </a> </h3>
                                        <div class="text color-666"> These panels boast 6H hardness, anti-scratch, and anti-fingerprint properties, making them ideal for high-traffic areas. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix-item">
                                <div class="case-card">
                                    <a href="{{ route('product.plb') }}" class="img">
                                        <img src="{{ asset('assets/img/services/acrylic-sheets.webp') }}" alt="" class="img-cover">
                                    </a>
                                    <div class="info">
                                        <h3 class="title fsz-35 mb-20"> <a href="{{ route('product.plb') }}" class="hover-orange1">
                                            Acrylic Sheets </a> </h3>
                                        <div class="text color-666"> Combining stunning aesthetics with exceptional durability, offering a high-gloss, light-reflective surface perfect.
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
