@component('layouts.frontend')

    @section('bodyclass', 'inner-pages-style1 faq-pg-style1 portfolio-pg-style1')

    @section('pagestyles')
    <link rel="stylesheet" href="{{ asset('assets/css/innerpages.css') }}">
    @endsection

    @section('breadcrumb')
    <header class="tc-inner-header-style1"  style="background-image: url({{ asset('assets/img/breadcrumb.webp') }})">
        <div class="container">
            <div class="info col-lg-7">
                <h1 class="js-title text-white"> faqs </h1>
                <div class="text fsz-18  text-white"> Architecture is a visual art, and the building <br> speak for
                    themselves </div>
            </div>
        </div>
    </header>
    @endsection
    
    <!--  Start process  -->
    <section class="tc-process-style2">
        <div class="container">
            <h2 class="fsz-45 fw-500 mb-80 text-center"> Got <span class="sub-font fst-italic color-orange1 fw-400">  Questions? </span> </h2>
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="accordion-side wow fadeInUp slow">
                            <div class="accordion" id="accordionProcess">
                                <div class="accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <span class="num"> 1 / </span> <h3> What products does Phoenix offer?
                                        </h3>
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionProcess">
                                    <div class="accordion-body">
                                        <div class="text">
                                        We offer a wide range of high-quality wood lamination products, including Pre-laminated Boards, Textured Laminates, UV-coated Panels, Acrylic Sheets, and PET boards. Each product is designed to enhance your space with style and durability.

                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <div class="accordion-header" id="headingTwo">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        <span class="num"> 2 / </span> <h3> Are Phoenix products customizable?
                                         </h3>
                                    </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionProcess">
                                    <div class="accordion-body">
                                        <div class="text">
                                        Yes! Our products come in various styles and finishes, and we can tailor them to fit your unique design needs. Just let us know what you're looking for!

                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <div class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        <span class="num"> 3 / </span> <h3> Where is Phoenix located?
                                        </h3>
                                    </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionProcess">
                                    <div class="accordion-body">
                                        <div class="text">
                                        We’re based in Rajasthan, India, with a fully automated plant dedicated to creating top-notch wood laminates for both domestic and international markets.

                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                        <span class="num"> 4 / </span> <h3> How do I order Phoenix products?
                                        </h3>
                                    </button>
                                    </div>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionProcess">
                                    <div class="accordion-body">
                                        <div class="text">
                                        You can get in touch with us through our contact details, and we’ll guide you through the process. For large orders or inquiries, we’re happy to offer a personalized consultation.

                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                        <span class="num"> 5 / </span> <h3> Do you offer eco-friendly products?

                                        </h3>
                                    </button>
                                    </div>
                                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionProcess">
                                    <div class="accordion-body">
                                        <div class="text">
                                        Absolutely! Sustainability is at the core of our business. From eco-friendly materials to energy-efficient production processes, Phoenix is committed to responsible practices in every step of the journey.



                                        </div>
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
    <!--  End process  -->

@section('pagescripts')
<script src="{{ asset('assets/js/innerpages.js') }}"></script>
@endsection
    
@endcomponent
