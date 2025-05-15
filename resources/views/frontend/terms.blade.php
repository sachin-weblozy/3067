@component('layouts.frontend')

    @section('bodyclass', 'inner-pages-style1 post-pg-style1')

    @section('pagestyles')
    <link rel="stylesheet" href="{{ asset('assets/css/innerpages.css') }}">
    @endsection

    @section('breadcrumb')
    <header class="tc-inner-header-style1 pb-100" style="background-image: url({{ asset('assets/img/breadcrumb7.webp') }})">
        <div class="container">
            <div class="info">
                <h1 class="js-title text-white"> terms & conditions </h1>
                <div class="text fsz-18 text-white"> Want to chat further? We’d love to hear from you, let us
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
                    <h2>Welcome to Phoenix!</h2>
                    <p>By using our website, you agree to comply with and be bound by the following Terms and Conditions.</p>
                    <h3>Use of Website:</h3>
                    <p>You agree to use our website for lawful purposes only and in a way that does not infringe on the rights of others.</p>
                    <h3>Product Information:</h3>
                    <p>The products displayed on our website are for informational purposes. Prices and availability may change, and we reserve the right to correct any errors or inaccuracies in product descriptions.</p>
                    <h3>Limitation of Liability:</h3>
                    <p>Phoenix is not liable for any indirect or consequential damages arising from the use of our website or products.</p>
                    <h3>Governing Law:</h3>
                    <p>These Terms and Conditions are governed by the laws of India. Any disputes will be subject to the jurisdiction of the courts in India.</p>
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
