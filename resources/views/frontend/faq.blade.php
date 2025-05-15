@component('layouts.frontend')

    @section('bodyclass', 'inner-pages-style1 faq-pg-style1 portfolio-pg-style1')

    @section('pagestyles')
    <link rel="stylesheet" href="{{ asset('assets/css/innerpages.css') }}">
    @endsection

    @section('breadcrumb')
    <header class="tc-inner-header-style1"  style="background-image: url({{ asset('assets/img/breadcrumb4.webp') }})">
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
                                            <span class="num"> 1 / </span> <h3> What is Pre-lam? </h3>
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionProcess">
                                        <div class="accordion-body">
                                            <div class="text">
                                                Pre-lam, short for pre-laminated, refers to wood panels with decorative laminate finishes. These panels are ready to use and eliminate the need for additional surface treatments, saving time and effort in furniture or interior design projects.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingTwo">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                            <span class="num"> 2 / </span> <h3> What are the different types of boards we offer? </h3>
                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionProcess">
                                        <div class="accordion-body">
                                            <div class="text">
                                                We offer a variety of boards like MDF Interior or Exterior, Particle Boards, HDF, HDWR (High-Density Water-Resistant Fiber Board), and more.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                            <span class="num"> 3 / </span> <h3> Why is Pre-lam better than using ordinary laminates? </h3>
                                        </button>
                                    </div>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionProcess">
                                        <div class="accordion-body">
                                            <div class="text">
                                                <strong>Pre-applied Finish:</strong> Pre-lam eliminates the need for separate lamination, saving time and effort during manufacturing or installation.<br>
                                                <strong>Enhanced Durability:</strong> The lamination process protects the substrate from moisture, scratches, and stains.<br>
                                                <strong>Consistent Quality:</strong> Pre-lamination ensures a uniform and consistent finish across the entire surface.<br>
                                                <strong>Wider Range of Options:</strong> Pre-lam offers a wide variety of colors, textures, and finishes, including unique high-gloss and super-matte options.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                            <span class="num"> 4 / </span> <h3> Do we offer customization? </h3>
                                        </button>
                                    </div>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionProcess">
                                        <div class="accordion-body">
                                            <div class="text">
                                                Yes, since our products are interconnected, we can provide a variety of options to meet specific needs. Customizations are available for Motherboards, thicknesses, finishes (such as suede, gloss, texture, fluted, etc.), designs, packaging, and sizes. We also offer pre-cut sizes to help reduce waste.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                            <span class="num"> 5 / </span> <h3> What is UV curing? </h3>
                                        </button>
                                    </div>
                                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionProcess">
                                        <div class="accordion-body">
                                            <div class="text">
                                                UV curing is a process in which a liquid coating (such as paint or finish) is applied to a surface and then hardened using ultraviolet rays. This results in a durable, scratch-resistant, high-quality finish with options like high gloss or super matte.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                            <span class="num"> 6 / </span> <h3> What is Lucent Acrylic? </h3>
                                        </button>
                                    </div>
                                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionProcess">
                                        <div class="accordion-body">
                                            <div class="text">
                                                Lucent Acrylic is our premium range of high-quality acrylic sheets, known for their exceptional hardness. Thickness starts from as low as 0.6mm to 2mm. These sheets are applied directly onto boards for a sleek, durable surface or sold individually for various applications. We offer an exquisite range of colors and designs, including floral patterns, marble finishes, and solid colors.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
                                            <span class="num"> 7 / </span> <h3> What is Phoenix Edge: The Next Gen? </h3>
                                        </button>
                                    </div>
                                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionProcess">
                                        <div class="accordion-body">
                                            <div class="text">
                                                Phoenix Edge: The Next Gen is our advanced range of PET-EB (electron beam) cured products. This innovative product line combines cutting-edge technology with superior durability and aesthetics. These products offer exceptional scratch resistance, chemical resistance, fire retardant properties, and a flawless surface. Available in two finishes – Super Matte and High Gloss – it provides superior quality compared to UV curing and is designed for long-lasting performance.
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
