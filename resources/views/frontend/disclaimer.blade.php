@component('layouts.frontend')

    @section('bodyclass', 'inner-pages-style1 post-pg-style1')

    @section('pagestyles')
    <link rel="stylesheet" href="{{ asset('assets/css/innerpages.css') }}">
    @endsection

    @section('breadcrumb')
    <header class="tc-inner-header-style1 pb-100">
        <div class="container">
            <div class="info">
                <h1 class="js-title"> disclaimer </h1>
                <div class="text fsz-18 color-666"> Want to chat further? We’d love to hear from you, let us
                    oppoturnity <br> to make your dream become reality </div>
            </div>
        </div>
    </header>
    @endsection
    
    <!--  Start post-content  -->
    <section class="tc-post-content-style1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="info">
                    <h2>Disclaimer</h2>
                    <p>The information provided on the Phoenix website is for general informational purposes only. While we strive to provide accurate and up-to-date information, we cannot guarantee the accuracy or completeness of the content. Phoenix is not responsible for any errors or omissions, or for any actions taken based on the information provided.</p>
                    
                    <h3>No Warranty:</h3>
                    <p>Phoenix does not make any warranties or representations regarding the products or services on our website. All products are subject to availability, and we make no guarantees regarding their suitability for your needs.</p>
                    
                    <h3>External Links:</h3>
                    <p>Our website may include links to other websites. These links are provided for convenience, and Phoenix does not endorse or take responsibility for the content or privacy practices of these third-party sites.</p>
                    
                    <h3>Indemnity:</h3>
                    <p>You agree to indemnify Phoenix and hold us harmless from any claims, damages, or losses arising from your use of our website or products.</p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--  End post-content  -->

@section('pagescripts')
<script src="{{ asset('assets/js/innerpages.js') }}"></script>
@endsection
    
@endcomponent
