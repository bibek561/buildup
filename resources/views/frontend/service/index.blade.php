@extends('layouts.frontend.master')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Services</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('service') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">services</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Service Start -->
    <div class="page-service">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our services</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Our construction services</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We specialize in a wide range of construction
                            services, including residential, commercial, and industrial projects.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Service Image Start -->
                        <div class="service-image" data-cursor-text="View">
                            <a href="#">
                                <figure>
                                    <img src="{{ asset('frontend/images/service-img-1.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Body Title Start -->
                            <div class="service-body-title">
                                <h3>building construction</h3>
                            </div>
                            <!-- Service Body Title End -->

                            <!-- Service Content Start -->
                            <div class="service-content">
                                <p>Our post-construction services gives you peace of mind knowing that we are still here for
                                    you even after.</p>
                                <div class="service-content-footer">
                                    <a href="#" class="readmore-btn">view more</a>
                                </div>
                            </div>
                            <!-- Service Content End -->
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Service Image Start -->
                        <div class="service-image" data-cursor-text="View">
                            <a href="#">
                                <figure>
                                    <img src="{{ asset('frontend/images/service-img-2.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Body Title Start -->
                            <div class="service-body-title">
                                <h3>architecture design</h3>
                            </div>
                            <!-- Service Body Title End -->

                            <!-- Service Content Start -->
                            <div class="service-content">
                                <p>Our post-construction services gives you peace of mind knowing that we are still here for
                                    you even after.</p>
                                <div class="service-content-footer">
                                    <a href="#" class="readmore-btn">view more</a>
                                </div>
                            </div>
                            <!-- Service Content End -->
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Service Image Start -->
                        <div class="service-image" data-cursor-text="View">
                            <a href="#">
                                <figure>
                                    <img src="{{ asset('frontend/images/service-img-3.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Body Title Start -->
                            <div class="service-body-title">
                                <h3>building renovation</h3>
                            </div>
                            <!-- Service Body Title End -->

                            <!-- Service Content Start -->
                            <div class="service-content">
                                <p>Our post-construction services gives you peace of mind knowing that we are still here for
                                    you even after.</p>
                                <div class="service-content-footer">
                                    <a href="#" class="readmore-btn">view more</a>
                                </div>
                            </div>
                            <!-- Service Content End -->
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1s">
                        <!-- Service Image Start -->
                        <div class="service-image" data-cursor-text="View">
                            <a href="#">
                                <figure>
                                    <img src="{{ asset('frontend/images/service-img-4.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Body Title Start -->
                            <div class="service-body-title">
                                <h3>flooring & roofing</h3>
                            </div>
                            <!-- Service Body Title End -->

                            <!-- Service Content Start -->
                            <div class="service-content">
                                <p>Our post-construction services gives you peace of mind knowing that we are still here for
                                    you even after.</p>
                                <div class="service-content-footer">
                                    <a href="#" class="readmore-btn">view more</a>
                                </div>
                            </div>
                            <!-- Service Content End -->
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.25s">
                        <!-- Service Image Start -->
                        <div class="service-image" data-cursor-text="View">
                            <a href="#">
                                <figure>
                                    <img src="{{ asset('frontend/images/service-img-5.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Body Title Start -->
                            <div class="service-body-title">
                                <h3>building maintenance</h3>
                            </div>
                            <!-- Service Body Title End -->

                            <!-- Service Content Start -->
                            <div class="service-content">
                                <p>Our post-construction services gives you peace of mind knowing that we are still here for
                                    you even after.</p>
                                <div class="service-content-footer">
                                    <a href="#" class="readmore-btn">view more</a>
                                </div>
                            </div>
                            <!-- Service Content End -->
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.5s">
                        <!-- Service Image Start -->
                        <div class="service-image" data-cursor-text="View">
                            <a href="#">
                                <figure>
                                    <img src="{{ asset('frontend/images/service-img-6.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Body Title Start -->
                            <div class="service-body-title">
                                <h3>project management</h3>
                            </div>
                            <!-- Service Body Title End -->

                            <!-- Service Content Start -->
                            <div class="service-content">
                                <p>Our post-construction services gives you peace of mind knowing that we are still here for
                                    you even after.</p>
                                <div class="service-content-footer">
                                    <a href="#" class="readmore-btn">view more</a>
                                </div>
                            </div>
                            <!-- Service Content End -->
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Service End -->

    <!-- What We Do Section Start -->
    <div class="what-we-do">
        <div class="container">
            <div class="row section-row">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">what we do</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Building the future on a foundation of excellence
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">We specialize in a wide range of construction services,
                        including residential, commercial, and industrial projects. From initial design to final inspection,
                        we work closely with our clients to understand their unique needs and vision. </p>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Company Counter Item Start -->
                    <div class="company-counter-item">
                        <div class="company-counter-content">
                            <h3><span class="counter">99</span>%</h3>
                            <p>building control approval rate</p>
                        </div>
                    </div>
                    <!-- Company Counter Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Company Counter Item Start -->
                    <div class="company-counter-item">
                        <div class="company-counter-content">
                            <h3><span class="counter">320</span>+</h3>
                            <p>active projects in construction management</p>
                        </div>
                    </div>
                    <!-- Company Counter Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Company Counter Item Start -->
                    <div class="company-counter-item">
                        <div class="company-counter-content">
                            <h3><span class="counter">200</span>+</h3>
                            <p>completed projects every year</p>
                        </div>
                    </div>
                    <!-- Company Counter Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Company Counter Item Start -->
                    <div class="company-counter-item">
                        <div class="company-counter-content">
                            <h3><span class="counter">4.253</span></h3>
                            <p>million euros turnover in 2020</p>
                        </div>
                    </div>
                    <!-- Company Counter Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do Section End -->

    <!-- Cta Box Section Start -->
    <div class="cta-box">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-8">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Let's bulid something great together!</h2>
                        <p class="wow fadeInUp">Don't wait any longer to bring your construction dreams to life. Partner
                            with Builtup and experience unparalleled service and quality.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Section Btn Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a href="#" class="btn-default btn-large">get free quote</a>
                    </div>
                    <!-- Section Btn End -->
                </div>

                <div class="col-lg-5 col-md-4">
                    <!-- Cta Box Image Start -->
                    <div class="cta-box-image">
                        <figure>
                            <img src="{{ asset('frontend/images/cta-box-img.png') }}" alt="">
                        </figure>
                    </div>
                    <!-- Cta Box Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Cta Box Section End -->

    <!-- Contact Us Section Start -->
    <div class="contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-5">
                    <!-- Contact Sidebar Start -->
                    <div class="contact-sidebar wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Contact Info Start -->
                        <div class="contact-info">
                            <div class="icon-box">
                                <img src="{{ asset('frontend/images/icon-phone.svg') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <p>call support center 24/7</p>
                                <h3>+1 809 120 6705</h3>
                            </div>
                        </div>
                        <!-- Contact Info End -->

                        <!-- Contact Info Start -->
                        <div class="contact-info">
                            <div class="icon-box">
                                <img src="{{ asset('frontend/images/icon-mail.svg') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <p>write to us</p>
                                <h3>info@domain.com</h3>
                            </div>
                        </div>
                        <!-- Contact Info End -->

                        <!-- Contact Info Image Start -->
                        <div class="contact-info-image">
                            <figure>
                                <img src="{{ asset('frontend/images/contact-info-img.png') }}" alt="">
                            </figure>
                        </div>
                        <!-- Contact Info Image End -->
                    </div>
                    <!-- Contact Sidebar End -->
                </div>

                <div class="col-lg-8 col-md-7">
                    <!-- Contact Form start -->
                    <div class="contact-form wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Get in touch with us</h2>
                        </div>
                        <!-- Section Title End -->

                        <form id="contactForm" action="#" method="POST" data-toggle="validator">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Enter Your name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Enter Your email" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Phone number" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="website" class="form-control" id="website"
                                        placeholder="Subject" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="msg" class="form-control" id="msg" rows="3" placeholder="Message" required=""></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default">submit</button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Us Section End -->
@endsection
