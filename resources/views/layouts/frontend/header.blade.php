<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('frontend/images/logo.svg') }}" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('frontend.services') }}">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('frontend.blog') }}">Blog</a></li>
                            <li class="nav-item submenu"><a class="nav-link" href="#">Pages</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('frontend.project') }}">Project</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('frontend.team') }}">Our Team</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('frontend.faqs') }}">FAQ</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('notFound') }}">404</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item highlighted-menu"><a class="nav-link"
                                    href="{{ route('frontend.contact') }}">Contact
                                    Us</a></li>
                        </ul>
                    </div>
                    <!-- Let’s Start Button Start -->
                    <div class="header-btn d-inline-flex">
                        <a class="btn-default" href="{{ route('frontend.contact') }}">Contact Us</a>
                    </div>
                    <!-- Let’s Start Button End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->
