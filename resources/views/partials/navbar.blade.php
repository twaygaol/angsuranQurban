<nav class="px-3 py-3 bg-white shadow-sm navbar navbar-expand-lg navbar-light py-lg-0 px-lg-0">
    <a href="{{ url('/') }}" class="navbar-brand ms-lg-5">
        <h1 class="m-0 text-uppercase text-dark">
            <img class="img-fluid" width="70" height="70" src="{{ asset('img/logo.png') }}" alt="">Maeza Farm
        </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="py-0 navbar-nav ms-auto">
            {{-- <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
            <a href="{{ url('/service') }}" class="nav-item nav-link">Service</a>
            <a href="{{ url('/product') }}" class="nav-item nav-link">Product</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="m-0 dropdown-menu">
                    <a href="{{ url('/price') }}" class="dropdown-item">Pricing Plan</a>
                    <a href="{{ url('/team') }}" class="dropdown-item">The Team</a>
                    <a href="{{ url('/testimonial') }}" class="dropdown-item">Testimonial</a>
                    <a href="{{ url('/blog') }}" class="dropdown-item">Blog Grid</a>
                    <a href="{{ url('/detail') }}" class="dropdown-item">Blog Detail</a>

                </div>
            </div> --}}
            <a href="{{ url('/admin') }}" style="background-color: #e3cc44" class="px-5 text-black bg-orange-300 nav-item nav-link nav-contact ms-lg-5">Login <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</nav>
