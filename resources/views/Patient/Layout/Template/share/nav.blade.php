<!-- Navbar Start -->
<div class="container-fluid sticky-top bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="{{ route('HOME') }}" class="navbar-brand">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>Medinova</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('HOME') }}" class="nav-item nav-link active">Home</a>
                    <a href="price.html" class="nav-item nav-link">Doctors</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                        <div class="dropdown-menu m-0">
                            @if (patientAuth())
                                <a href="team.html" class="dropdown-item">My Account</a>
                                <a href="search.html" class="dropdown-item">Search</a>
                                <a href="{{ route('patient.logout') }}" class="dropdown-item">Log out</a>
                            @else
                                <a href="{{ route('patient.loginPage') }}" class="dropdown-item">Sign in</a>
                                <a href="{{ route('patient.registerPage') }}" class="dropdown-item">Register</a>
                            @endif
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
