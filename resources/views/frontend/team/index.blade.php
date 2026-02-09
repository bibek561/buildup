@extends('layouts.frontend.master')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Our Team</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.team') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">team</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Team Start -->
    <div class="page-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/team-1.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team content Start -->
                            <div class="team-content">
                                <h3>benjamin miller</h3>
                                <p>project manager</p>
                            </div>
                            <!-- Team content End -->

                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/team-2.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team content Start -->
                            <div class="team-content">
                                <h3>jane smith</h3>
                                <p>lead architect</p>
                            </div>
                            <!-- Team content End -->

                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/team-3.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team content Start -->
                            <div class="team-content">
                                <h3>mike johnson</h3>
                                <p>chief engineer</p>
                            </div>
                            <!-- Team content End -->

                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/team-4.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team content Start -->
                            <div class="team-content">
                                <h3>john doe</h3>
                                <p>site supervisor</p>
                            </div>
                            <!-- Team content End -->

                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="1s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/team-5.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team content Start -->
                            <div class="team-content">
                                <h3>david brown</h3>
                                <p>Safety Officer</p>
                            </div>
                            <!-- Team content End -->

                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="1.25s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/team-6.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team content Start -->
                            <div class="team-content">
                                <h3>susan wilson</h3>
                                <p>structural engineer</p>
                            </div>
                            <!-- Team content End -->

                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Team End -->
@endsection
