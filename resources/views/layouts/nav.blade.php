{{-- <!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <a href="menu.html" class="nav-item nav-link">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="booking.html" class="dropdown-item">Booking</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-2 px-4">Book A Table</a>
        </div>
    </nav> --}}

<!-- Navbar Start -->
<div class="container-xxl p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0 fixed-top">
        <!-- Logo -->
        <a href="{{ route('dashboard') }}" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
        </a>

        <!-- Toggle Button for small screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link active">About</a>
                <a href="{{ url('/services') }}" class="nav-item nav-link active">Services</a>
                <a href="{{ url('/menu') }}" class="nav-item nav-link active">Menu</a>

                <!-- Dropdown Pages -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('/booking') }}" class="dropdown-item">Booking</a>
                        <a href="{{ url('/team') }}" class="dropdown-item">Our Team</a>
                        <a href="{{ url('/testimonial') }}" class="dropdown-item">Testimonial</a>
                    </div>
                </div>

                <a href="{{ url('/contact') }}" class="nav-item nav-link active">Contact</a>
                <a href="{{ url('/booking')}}" class="btn btn-primary py-2 px-4 ms-3  " style="padding-top: 4rem ; height:3rem; margin-top: 1rem;">Book A Table</a>
            </div>

            <!-- User Dropdown (from Breeze) -->
            @auth
                <div class="nav-item dropdown ms-4">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end m-0">
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>

                    </div>
                </div>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-3">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 ms-3">register</a>
            @endguest
        </div>

    </nav>
   
</div>

<!-- Navbar End -->
