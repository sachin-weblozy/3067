<nav class="{{ request()->route()->getName() === 'index' ? 'navbar navbar-expand-lg navbar-dark tc-navbar-style1 section-padding-x' : 'navbar navbar-expand-lg .navbar-light inner-navbar-style1' }}">
    <div class="container-fluid content">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('logo1x.png') }}" alt="" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faq') }}">Faqs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            <div class="nav-side">
                <a href="#" class="butn rounded-pill hover-bg-black bg-orange1 text-white">
                    <span> Explore Shades <i class="small ms-1 ti-arrow-top-right"></i> </span>
                </a>
            </div>
        </div>
    </div>
</nav>

@yield('breadcrumb')