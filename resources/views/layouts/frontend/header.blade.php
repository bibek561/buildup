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
                            <li class="nav-item"><a class="nav-link" href="{{ route('service') }}">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                            <li class="nav-item submenu"><a class="nav-link" href="#">Pages</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('service') }}">Service
                                            Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog
                                            Details</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('project') }}">Project</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#">Project
                                            Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('team') }}">Our Team</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('faqs') }}">FAQ</a></li>
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
                        <a href="{{ route('frontend.contact') }}" class="btn-default">Contact Us</a>
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
