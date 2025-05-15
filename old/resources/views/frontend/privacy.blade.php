@component('layouts.frontend')

    @section('bodyclass', 'inner-pages-style1 post-pg-style1')

    @section('pagestyles')
    <link rel="stylesheet" href="{{ asset('assets/css/innerpages.css') }}">
    @endsection

    @section('breadcrumb')
    <header class="tc-inner-header-style1 pb-100" style="background-image: url({{ asset('assets/img/breadcrumb.webp') }})">
        <div class="container">
            <div class="info">
                <h1 class="js-title text-white"> privacy policy </h1>
                <div class="text fsz-18  text-white"> Want to chat further? We’d love to hear from you, let us
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
                    <h2>At Phoenix, your privacy is important to us.</h2>
                    <p>We are committed to safeguarding the personal information you share with us. This Privacy Policy outlines how we collect, use, and protect your data when you visit our website. By using our website, you agree to the practices described in this policy.</p>
                    
                    <h3>What Information We Collect:</h3>
                    <p><strong>Personal Information:</strong> When you interact with our site (such as contacting us or signing up for updates), we may collect personal details like your name, email address, and contact number.</p>
                    <p><strong>Non-personal Information:</strong> We may also gather non-personal data such as browser type, IP address, and usage patterns for analytical purposes to improve our website and services.</p>
                    
                    <h3>How We Use Your Information:</h3>
                    <p>To enhance user experience and offer better services.</p>
                    <p>To communicate with you regarding updates, offers, and product information.</p>
                    <p>To analyze website traffic and improve content.</p>

                    <h3>How We Protect Your Information:</h3>
                    <p>We implement security measures to safeguard your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
                    
                    <h3>Sharing Your Information:</h3>
                    <p>We will not share, sell, or rent your personal information to third parties unless required by law.</p>
                    
                    <h3>Changes to This Policy:</h3>
                    <p>We may update this policy periodically. Any changes will be posted on this page.</p>
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
