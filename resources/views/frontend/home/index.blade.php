@extends('layouts.frontend.master')
@section('content')
    <!-- Hero Section Start -->
    <div class="hero bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">welcome to builtup</h3>
                            <h1 class="text-anime-style-3" data-cursor="-opaque">Building dreams with precision and excellence
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">we specialize in turning visions into reality with
                                exceptional craftsmanship and meticulous attention to detail. With years of experience and a
                                commitment to quality.</p>
                        </div>

                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <a class="btn-default" href="#">get started</a>
                            <a class="btn-default btn-highlighted" href="#">view Projects</a>
                        </div>
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- About Us Image Start -->
                    <div class="about-image">
                        <div class="about-img">
                            <figure class="reveal">
                                <img src="{{ asset('frontend/images/about-us-img.png') }}" alt="">
                            </figure>
                        </div>
                    </div>
                    <!-- About Us Image End -->
                </div>

                <div class="col-lg-7">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Crafting structures that last a lifetime
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Crafting structures that last a lifetime requires
                                a holistic approach that integrates advanced materials, resilient design, regular
                                maintenance, and sustainability practices. By learning from historical examples and
                                leveraging modern technology.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Content Body Start -->
                        <div class="about-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>Comprehensive Services</li>
                                <li>Advanced Technology</li>
                                <li>Transparent Communication</li>
                            </ul>
                        </div>
                        <!-- About Content Body End -->

                        <!-- About Content Footer Start -->
                        <div class="about-content-footer wow fadeInUp" data-wow-delay="0.75s">
                            <div class="about-footer-btn">
                                <a class="btn-default" href="#">get free quote</a>
                            </div>
                            <div class="about-contact-support">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icon-phone.svg') }}" alt="">
                                </div>
                                <div class="about-support-content">
                                    <p>call support center 24X7</p>
                                    <h3>+1 809 120 6705</h3>
                                </div>
                            </div>
                        </div>
                        <!-- About Content Footer End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Our Service Section Start -->
    <div class="our-service">
        <div class="light-bg-section">
            <div class="container-fluid">
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
                    <div class="col-lg-3 col-md-6">
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
                                    <p>Our post-construction services gives you peace of mind knowing that we are still here
                                        for you even after.</p>
                                    <div class="service-content-footer">
                                        <a class="readmore-btn" href="#">view more</a>
                                    </div>
                                </div>
                                <!-- Service Content End -->
                            </div>
                            <!-- Service Body End -->
                        </div>
                        <!-- Service Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
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
                                    <p>Our post-construction services gives you peace of mind knowing that we are still here
                                        for you even after.</p>
                                    <div class="service-content-footer">
                                        <a class="readmore-btn" href="#">view more</a>
                                    </div>
                                </div>
                                <!-- Service Content End -->
                            </div>
                            <!-- Service Body End -->
                        </div>
                        <!-- Service Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
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
                                    <p>Our post-construction services gives you peace of mind knowing that we are still here
                                        for you even after.</p>
                                    <div class="service-content-footer">
                                        <a class="readmore-btn" href="#">view more</a>
                                    </div>
                                </div>
                                <!-- Service Content End -->
                            </div>
                            <!-- Service Body End -->
                        </div>
                        <!-- Service Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
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
                                    <h3>building maintenance</h3>
                                </div>
                                <!-- Service Body Title End -->

                                <!-- Service Content Start -->
                                <div class="service-content">
                                    <p>Our post-construction services gives you peace of mind knowing that we are still here
                                        for you even after.</p>
                                    <div class="service-content-footer">
                                        <a class="readmore-btn" href="#">view more</a>
                                    </div>
                                </div>
                                <!-- Service Content End -->
                            </div>
                            <!-- Service Body End -->
                        </div>
                        <!-- Service Item End -->
                    </div>

                    <!-- Services Footer Btn Start -->
                    <div class="service-footer-btn wow fadeInUp" data-wow-delay="1.25s">
                        <a class="btn-default" href="#">view all services</a>
                    </div>
                    <!-- Services Footer Btn End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Service Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">why choose us?</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Why we're your best choice</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Developed in close collaboration with our partners
                            and clients, combines industry knowledge, decades of experience, ingenuity and adaptability to
                            deliver excellence to our clients.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="images/icon-why-choose-1.svg" alt="">
                        </div>
                        <div class="why-choose-content">
                            <h3>innovation solutions</h3>
                            <p>Simple actions make a difference. It starts and ends with each employee striving to work
                                safer every single day so they can return.</p>
                        </div>
                        <div class="why-choose-counter">
                            <h3><span class="counter">800</span>+</h3>
                            <p>project complated</p>
                        </div>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Why Choose Image Start -->
                    <div class="why-choose-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('frontend/images/why-choose-img-1.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Why Choose Image End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-why-choose-2.svg') }}" alt="">
                        </div>
                        <div class="why-choose-content">
                            <h3>quality craftsmanship</h3>
                            <p>Simple actions make a difference. It starts and ends with each employee striving to work
                                safer every single day so they can return.</p>
                        </div>
                        <div class="why-choose-counter">
                            <h3><span class="counter">800</span>+</h3>
                            <p>project complated</p>
                        </div>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Why Choose Image Start -->
                    <div class="why-choose-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('frontend/images/why-choose-img-2.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Why Choose Image End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-why-choose-3.svg') }}" alt="">
                        </div>
                        <div class="why-choose-content">
                            <h3>expertise and experience</h3>
                            <p>Simple actions make a difference. It starts and ends with each employee striving to work
                                safer every single day so they can return.</p>
                        </div>
                        <div class="why-choose-counter">
                            <h3><span class="counter">800</span>+</h3>
                            <p>project complated</p>
                        </div>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Why Choose Image Start -->
                    <div class="why-choose-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('frontend/images/why-choose-img-3.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Why Choose Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Our Projects Section Start -->
    <div class="our-projects">
        <div class="light-bg-section">
            <div class="container-fluid">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">our projects</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Explore our diverse range of projects
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We specialize in a wide range of construction
                                services, including residential, commercial, and industrial projects.</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Project Image Start -->
                            <div class="project-image" data-cursor-text="View">
                                <a href="#">
                                    <figure>
                                        <img src="{{ asset('frontend/images/our-project-1.jpg') }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <!-- Project Image End -->

                            <!-- Project Body Start -->
                            <div class="project-body">
                                <!-- Project Body Title Start -->
                                <div class="project-body-title">
                                    <h3>aspen heights</h3>
                                </div>
                                <!-- Project Body Title End -->

                                <!-- Project Content Start -->
                                <div class="project-content">
                                    <p>Our post-construction services gives you peace of mind knowing that we are still here
                                        for you even after.</p>
                                    <div class="project-content-footer">
                                        <a class="readmore-btn" href="#">view more</a>
                                    </div>
                                </div>
                                <!-- Project Content End -->
                            </div>
                            <!-- Project Body End -->
                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.5s">
                            <!-- Project Image Start -->
                            <div class="project-image" data-cursor-text="View">
                                <a href="#">
                                    <figure>
                                        <img src="{{ asset('frontend/images/our-project-2.jpg') }}" alt="">
                                    </figure>
                                </a>
                            </div>

                            <!-- Project Image End -->

                            <!-- Project Body Start -->
                            <div class="project-body">
                                <!-- Project Body Title Start -->
                                <div class="project-body-title">
                                    <h3>forest hill towers</h3>
                                </div>
                                <!-- Project Body Title End -->

                                <!-- Project Content Start -->
                                <div class="project-content">
                                    <p>Our post-construction services gives you peace of mind knowing that we are still here
                                        for you even after.</p>
                                    <div class="project-content-footer">
                                        <a class="readmore-btn" href="#">view more</a>
                                    </div>
                                </div>
                                <!-- Project Content End -->
                            </div>
                            <!-- Project Body End -->
                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.75s">
                            <!-- Project Image Start -->
                            <div class="project-image" data-cursor-text="View">
                                <a href="#">
                                    <figure>
                                        <img src="{{ asset('frontend/images/our-project-3.jpg') }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <!-- Project Image End -->

                            <!-- Project Body Start -->
                            <div class="project-body">
                                <!-- Project Body Title Start -->
                                <div class="project-body-title">
                                    <h3>bayside residences</h3>
                                </div>
                                <!-- Project Body Title End -->

                                <!-- Project Content Start -->
                                <div class="project-content">
                                    <p>Our post-construction services gives you peace of mind knowing that we are still here
                                        for you even after.</p>
                                    <div class="project-content-footer">
                                        <a class="readmore-btn" href="#">view more</a>
                                    </div>
                                </div>
                                <!-- Project Content End -->
                            </div>
                            <!-- Project Body End -->
                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="1s">
                            <!-- Project Image Start -->
                            <div class="project-image" data-cursor-text="View">
                                <a href="#">
                                    <figure>
                                        <img src="{{ asset('frontend/images/our-project-4.jpg') }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <!-- Project Image End -->

                            <!-- Project Body Start -->
                            <div class="project-body">
                                <!-- Project Body Title Start -->
                                <div class="project-body-title">
                                    <h3>parkview plaza</h3>
                                </div>
                                <!-- Project Body Title End -->

                                <!-- Project Content Start -->
                                <div class="project-content">
                                    <p>Our post-construction services gives you peace of mind knowing that we are still here
                                        for you even after.</p>
                                    <div class="project-content-footer">
                                        <a class="readmore-btn" href="#">view more</a>
                                    </div>
                                </div>
                                <!-- Project Content End -->
                            </div>
                            <!-- Project Body End -->
                        </div>
                        <!-- Project Item End -->
                    </div>

                    <!-- Services Footer Btn Start -->
                    <div class="project-footer-btn wow fadeInUp" data-wow-delay="1.25s">
                        <a class="btn-default" href="#">view all projects</a>
                    </div>
                    <!-- Services Footer Btn End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Projects Section End -->

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
                        <a class="btn-default btn-large" href="#">get free quote</a>
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

    <!-- Our Testiminial Start -->
    <div class="our-testimonial">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">testimonials</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">What people are saying about us</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We specialize in a wide range of construction
                            services, including residential, commercial, and industrial projects.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>We specialize in a wide range of construction services, including
                                                    residential, commercial, and industrial projects. From initial design to
                                                    final inspection, we work closely with our clients to understand their
                                                    unique needs and vision.</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('frontend/images/author-1.jpg') }}"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>johan duo</h3>
                                                <p>project manager</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>We specialize in a wide range of construction services, including
                                                    residential, commercial, and industrial projects. From initial design to
                                                    final inspection, we work closely with our clients to understand their
                                                    unique needs and vision.</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('frontend/images/author-2.jpg') }}"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Jane Smith</h3>
                                                <p>interior designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>We specialize in a wide range of construction services, including
                                                    residential, commercial, and industrial projects. From initial design to
                                                    final inspection, we work closely with our clients to understand their
                                                    unique needs and vision.</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('frontend/images/author-3.jpg') }}"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>chris martinez</h3>
                                                <p>logistics coordinator</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>We specialize in a wide range of construction services, including
                                                    residential, commercial, and industrial projects. From initial design to
                                                    final inspection, we work closely with our clients to understand their
                                                    unique needs and vision.</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('frontend/images/author-4.jpg') }}"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>alis white</h3>
                                                <p>structural engineer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testiminial End -->

    <!-- Our FAQs Section Start -->
    <div class="our-faqs">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">faqs</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Got questions? we've got answers</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We specialize in a wide range of construction
                            services, including residential, commercial, and industrial projects.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- Our FAQs Images Start -->
                    <div class="our-faqs-images">
                        <div class="row align-items-end">
                            <div class="col-md-6 col-6">
                                <!-- FAQs Img Start -->
                                <div class="faqs-img-1">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset('frontend/images/our-faqs-img-1.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <!-- FAQs Img End -->
                            </div>
                            <div class="col-md-6 col-6">
                                <!-- FAQs Img Start -->
                                <div class="faqs-img-2">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset('frontend/images/our-faqs-img-2.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <!-- FAQs Img End -->
                            </div>
                        </div>

                        <div class="row align-items-start">
                            <div class="col-md-6 col-6">
                                <!-- FAQs Img Start -->
                                <div class="faqs-img-1">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset('frontend/images/our-faqs-img-3.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <!-- FAQs Img End -->
                            </div>
                            <div class="col-md-6 col-6">
                                <!-- FAQs Img Start -->
                                <div class="faqs-img-2">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset('frontend/images/our-faqs-img-4.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <!-- FAQs Img End -->
                            </div>
                        </div>

                        <div class="our-faqs-bulitup">
                            <img src="{{ asset('frontend/images/icon-faq-bulitup.svg') }}" alt="">
                        </div>
                    </div>
                    <!-- Our FAQs Images End -->
                </div>

                <div class="col-lg-7">
                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="accordion">
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    type="button" aria-expanded="true" aria-controls="collapseOne">
                                    Do you offer a free, no obligation quotation?
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse show" id="collapseOne" data-bs-parent="#accordion"
                                aria-labelledby="headingOne">
                                <div class="accordion-body">
                                    <p>Our post-construction services gives you peace of mind knowing that we are still here
                                        for you even after.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" type="button" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    What services do you offer?
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapseTwo" data-bs-parent="#accordion"
                                aria-labelledby="headingTwo">
                                <div class="accordion-body">
                                    <p>Our post-construction services gives you peace of mind knowing that we are still here
                                        for you even after.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" type="button" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    What types of projects do you specialize in?
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordion"
                                aria-labelledby="headingThree">
                                <div class="accordion-body">
                                    <p>Our post-construction services gives you peace of mind knowing that we are still here
                                        for you even after.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" type="button" aria-expanded="false"
                                    aria-controls="collapsefour">
                                    How do I start a project with your company?
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapsefour" data-bs-parent="#accordion"
                                aria-labelledby="headingfour">
                                <div class="accordion-body">
                                    <p>Our post-construction services gives you peace of mind knowing that we are still here
                                        for you even after.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                    </div>
                    <!-- FAQ Accordion End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our FAQs Section End -->

    <!-- Our Blog Section End -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">news & blog</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Articles & blog posts</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We specialize in a wide range of construction
                            services, including residential, commercial, and industrial projects.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Blog Item Start -->
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image" data-cursor-text="View">
                            <figure>
                                <a class="image-anime" href="#">
                                    <img src="{{ asset('frontend/images/post-1.jpg') }}" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- post Item Content Start -->
                        <div class="post-item-content">
                            <!-- post Item Body Start -->
                            <div class="post-item-body">
                                <h2><a href="#">10 Essential Tips for Choosing the Right Builder</a></h2>
                            </div>
                            <!-- Post Item Body End-->

                            <!-- Post Item Footer Start-->
                            <div class="post-item-footer">
                                <a class="readmore-btn" href="#">read more</a>
                            </div>
                            <!-- Post Item Footer End-->
                        </div>
                        <!-- post Item Content End -->
                    </div>
                    <!-- Blog Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Blog Item Start -->
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image" data-cursor-text="View">
                            <figure>
                                <a class="image-anime" href="#">
                                    <img src="{{ asset('frontend/images/post-2.jpg') }}" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- post Item Content Start -->
                        <div class="post-item-content">
                            <!-- post Item Body Start -->
                            <div class="post-item-body">
                                <h2><a href="#">The Future of Sustainable Construction Innovations</a></h2>
                            </div>
                            <!-- Post Item Body End-->

                            <!-- Post Item Footer Start-->
                            <div class="post-item-footer">
                                <a class="readmore-btn" href="#">read more</a>
                            </div>
                            <!-- Post Item Footer End-->
                        </div>
                        <!-- post Item Content End -->
                    </div>
                    <!-- Blog Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Blog Item Start -->
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image" data-cursor-text="View">
                            <figure>
                                <a class="image-anime" href="#">
                                    <img src="{{ asset('frontend/images/post-3.jpg') }}" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- post Item Content Start -->
                        <div class="post-item-content">
                            <!-- post Item Body Start -->
                            <div class="post-item-body">
                                <h2><a href="#">How to Design Your Dream Home: A Step-by-Step Guide</a></h2>
                            </div>
                            <!-- Post Item Body End-->

                            <!-- Post Item Footer Start-->
                            <div class="post-item-footer">
                                <a class="readmore-btn" href="#">read more</a>
                            </div>
                            <!-- Post Item Footer End-->
                        </div>
                        <!-- post Item Content End -->
                    </div>
                    <!-- Blog Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog End -->

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
                                <img src="images/icon-phone.svg" alt="">
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

                        <form id="contactForm" data-toggle="validator" action="#" method="POST">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input class="form-control" id="name" type="text" name="name"
                                        placeholder="Enter Your name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input class="form-control" id="email" type="email" name="email"
                                        placeholder="Enter Your email" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input class="form-control" id="phone" type="text" name="phone"
                                        placeholder="Phone number" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input class="form-control" id="website" type="text" name="website"
                                        placeholder="Subject" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea class="form-control" id="msg" name="msg" rows="3" placeholder="Message" required=""></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12">
                                    <button class="btn-default" type="submit">submit</button>
                                    <div class="h3 hidden" id="msgSubmit"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form end -->
                </div>
            </div>
        </div>
    </div>
@endsection
