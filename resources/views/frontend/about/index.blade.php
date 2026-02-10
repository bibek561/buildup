 @extends('layouts.frontend.master')
 @section('content')
     <style>
         .simple-breadcrumb {
             display: flex;
             justify-content: center;
             /* center horizontally */
             align-items: center;
             gap: 8px;
             margin-top: -25px;
             font-size: 16px;
         }

         .simple-breadcrumb a {
             text-decoration: none;
             color: #fff;
         }

         .simple-breadcrumb a:hover {
             text-decoration: underline;
         }

         .simple-breadcrumb .arrow {
             color: #aaa;
         }

         .simple-breadcrumb .current {
             color: #fff;
             font-weight: 500;
         }
     </style>
     <!-- Page Header Start -->
     <div class="page-header parallaxie">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <!-- Page Header Box Start -->
                     <div class="page-header-box">
                         <h1 class="text-anime-style-3" data-cursor="-opaque">About</h1>
                         <nav class="simple-breadcrumb" aria-label="breadcrumb">
                             <a href="{{ route('home') }}">Home</a>
                             <span class="arrow">›</span>
                             <span class="current">About</span>
                         </nav>

                     </div>
                     <!-- Page Header Box End -->
                 </div>
             </div>
         </div>
     </div>
     <!-- Page Header End -->
     <!-- Page About Us Start -->
     <div class="page-about-us">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-5">
                     <!-- About Us Image Start -->
                     <div class="about-us-image">
                         <div class="about-us-img">
                             <figure class="reveal">
                                 <img src="{{ asset('frontend/images/about-us-img.png') }}" alt="">
                             </figure>
                         </div>
                     </div>
                     <!-- About Us Image End -->
                 </div>

                 <div class="col-lg-7">
                     <!-- About Content Start -->
                     <div class="about-us-content">
                         <!-- Section Title Start -->
                         <div class="section-title">
                             <h3 class="wow fadeInUp">about us</h3>
                             <h2 class="text-anime-style-3" data-cursor="-opaque">Crafting structures that last a lifetime
                             </h2>
                             <p class="wow fadeInUp" data-wow-delay="0.25s">Crafting structures that last a lifetime
                                 requires a holistic approach that integrates advanced materials, resilient design, regular
                                 maintenance, and sustainability practices. By learning from historical examples and
                                 leveraging modern technology.</p>
                         </div>
                         <!-- Section Title End -->

                         <!-- About Content Body Start -->
                         <div class="about-us-content-body wow fadeInUp" data-wow-delay="0.5s">
                             <ul>
                                 <li>Comprehensive Services</li>
                                 <li>Advanced Technology</li>
                                 <li>Transparent Communication</li>
                             </ul>
                         </div>
                         <!-- About Content Body End -->

                         <!-- About Content Footer Start -->
                         <div class="about-us-content-footer wow fadeInUp" data-wow-delay="0.75s">
                             <div class="about-us-footer-btn">
                                 <a class="btn-default" href="#">get free quote</a>
                             </div>
                             <div class="about-us-contact-support">
                                 <div class="icon-box">
                                     <img src="{{ asset('frontend/images/icon-phone.svg') }}" alt="">
                                 </div>
                                 <div class="about-us-support-content">
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
     <!-- Page About Us End -->

     <!-- Our Company History Start -->
     <div class="our-company-history">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-6">
                     <!-- Company History Image Start -->
                     <div class="company-history-image">
                         <div class="company-history-img">
                             <figure class="image-anime reveal">
                                 <img src="{{ asset('frontend/images/company-history-img.jpg') }}" alt="">
                             </figure>
                         </div>

                         <!-- Company Experience Box Start -->
                         <div class="company-experience">
                             <div class="company-experience-content">
                                 <h3><span class="counter">25</span>+</h3>
                                 <p>years of experience</p>
                             </div>
                         </div>
                         <!-- Company Experience Box End -->
                     </div>
                     <!-- Company History Image End -->
                 </div>

                 <div class="col-lg-6">
                     <div class="company-history-content">
                         <!-- Section Title Start -->
                         <div class="section-title">
                             <h3 class="wow fadeInUp">our history</h3>
                             <h2 class="text-anime-style-3" data-cursor="-opaque">Crafting structures that last a lifetime
                             </h2>
                         </div>
                         <!-- Section Title End -->

                         <!-- Company History Body Start -->
                         <div class="company-history-body">
                             <p class="wow fadeInUp" data-wow-delay="0.25s">We specialize in a wide range of construction
                                 services, including residential, commercial, and industrial projects. From initial design
                                 to final inspection, we work closely with our clients to understand their unique needs and
                                 vision. </p>

                             <p class="wow fadeInUp" data-wow-delay="0.5s">It is a long established fact that a reader will
                                 be distracted by the readable content of a page when looking at its layout. The point of
                                 using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                         </div>
                         <!-- Company History Body End -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Our Company History End -->

     <!-- Our Mission Vision Start -->
     <div class="our-mission-vision">
         <div class="container">
             <div class="row">
                 <div class="col-lg-4">
                     <!-- Mission Vision Item Start -->
                     <div class="mission-vision-item wow fadeInUp">
                         <!-- Icon Box Start -->
                         <div class="icon-box">
                             <img src="{{ asset('frontend/images/icon-our-mission.svg') }}" alt="">
                         </div>
                         <!-- Icon Box End -->

                         <!-- Mission Vision Content Start -->
                         <div class="mission-vision-content">
                             <h3>our mission</h3>
                             <p>Simple actions make a difference. It starts and ends with each employee striving to work
                                 safer every single day so they can return.</p>
                         </div>
                         <!-- Mission Vision Content End -->
                     </div>
                     <!-- Mission Vision Item End -->
                 </div>

                 <div class="col-lg-4">
                     <!-- Mission Vision Item Start -->
                     <div class="mission-vision-item wow fadeInUp" data-wow-delay="0.25s">
                         <!-- Icon Box Start -->
                         <div class="icon-box">
                             <img src="{{ asset('frontend/images/icon-our-vision.svg') }}" alt="">
                         </div>
                         <!-- Icon Box End -->

                         <!-- Mission Vision Content Start -->
                         <div class="mission-vision-content">
                             <h3>our vision</h3>
                             <p>Simple actions make a difference. It starts and ends with each employee striving to work
                                 safer every single day so they can return.</p>
                         </div>
                         <!-- Mission Vision Content End -->
                     </div>
                     <!-- Mission Vision Item End -->
                 </div>

                 <div class="col-lg-4">
                     <!-- Mission Vision Item Start -->
                     <div class="mission-vision-item wow fadeInUp" data-wow-delay="0.5s">
                         <!-- Icon Box Start -->
                         <div class="icon-box">
                             <img src="{{ asset('frontend/images/icon-our-values.svg') }}" alt="">
                         </div>
                         <!-- Icon Box End -->

                         <!-- Mission Vision Content Start -->
                         <div class="mission-vision-content">
                             <h3>our values</h3>
                             <p>Simple actions make a difference. It starts and ends with each employee striving to work
                                 safer every single day so they can return.</p>
                         </div>
                         <!-- Mission Vision Content End -->
                     </div>
                     <!-- Mission Vision Item End -->
                 </div>
             </div>
         </div>
     </div>
     <!-- Our Mission Vision End -->

     <!-- Intro Video Section Start -->
     <div class="intro-video">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <!-- Intro Video Box Start -->
                     <div class="intro-video-box" data-cursor-text="Play">
                         <!-- Video Image Start -->
                         <div class="video-image">
                             <a class="popup-video" href="https://www.youtube.com/watch?v=Y-x0efG1seA">
                                 <figure class="image-anime">
                                     <img src="{{ asset('frontend/images/video-bg.jpg') }}" alt="">
                                 </figure>
                             </a>
                         </div>
                         <!-- Video Image End -->

                         <!-- Video Play Button Start -->
                         <div class="video-play-button">
                             <a class="popup-video" href="https://www.youtube.com/watch?v=Y-x0efG1seA">
                                 <i class="fa-solid fa-play"></i>
                             </a>
                         </div>
                         <!-- Video Play Button End -->
                     </div>
                     <!-- Intro Video Box End -->
                 </div>
             </div>
         </div>
     </div>
     <!-- Intro Video Section End -->

     <!-- What We Do Section Start -->
     <div class="what-we-do">
         <div class="container">
             <div class="row section-row">
                 <!-- Section Title Start -->
                 <div class="section-title">
                     <h3 class="wow fadeInUp">what we do</h3>
                     <h2 class="text-anime-style-3" data-cursor="-opaque">Building the future on a foundation of
                         excellence
                     </h2>
                     <p class="wow fadeInUp" data-wow-delay="0.25s">We specialize in a wide range of construction
                         services,
                         including residential, commercial, and industrial projects. From initial design to final
                         inspection, we work closely with our clients to understand their unique needs and vision. </p>
                 </div>
                 <!-- Section Title End -->
             </div>

             <div class="row">
                 <div class="col-lg-3 col-6">
                     <!-- Company Counter Item Start -->
                     <div class="company-counter-item">
                         <div class="company-counter-content">
                             <h3><span class="counter">99</span>%</h3>
                             <p>buildings control approval rate</p>
                         </div>
                     </div>
                     <!-- Company Counter Item End -->
                 </div>

                 <div class="col-lg-3 col-6">
                     <!-- Company Counter Item Start -->
                     <div class="company-counter-item">
                         <div class="company-counter-content">
                             <h3><span class="counter">320</span>+</h3>
                             <p>active construction management</p>
                         </div>
                     </div>
                     <!-- Company Counter Item End -->
                 </div>

                 <div class="col-lg-3 col-6">
                     <!-- Company Counter Item Start -->
                     <div class="company-counter-item">
                         <div class="company-counter-content">
                             <h3><span class="counter">200</span>+</h3>
                             <p>completed projects every year</p>
                         </div>
                     </div>
                     <!-- Company Counter Item End -->
                 </div>

                 <div class="col-lg-3 col-6">
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

     <!-- Our Team Start -->
     <div class="our-team">
         <div class="container">
             <div class="row section-row">
                 <!-- Section Title Start -->
                 <div class="section-title">
                     <h3 class="wow fadeInUp">team</h3>
                     <h2 class="text-anime-style-3" data-cursor="-opaque">Our team</h2>
                     <p class="wow fadeInUp" data-wow-delay="0.25s">We specialize in a wide range of construction
                         services, including residential, commercial, and industrial projects. </p>
                 </div>
                 <!-- Section Title End -->
             </div>

             <div class="row">
                 <div class="col-lg-4 col-md-6">
                     <!-- Team Member Item Start -->
                     <div class="team-member-item wow fadeInUp" data-wow-delay="0.25s">
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
                                     <li><a class="social-icon" href="#"><i
                                                 class="fa-brands fa-facebook-f"></i></a></li>
                                     <li><a class="social-icon" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                     </li>
                                     <li><a class="social-icon" href="#"><i class="fa-brands fa-instagram"></i></a>
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
                                     <li><a class="social-icon" href="#"><i
                                                 class="fa-brands fa-facebook-f"></i></a></li>
                                     <li><a class="social-icon" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                     </li>
                                     <li><a class="social-icon" href="#"><i class="fa-brands fa-instagram"></i></a>
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
                                     <li><a class="social-icon" href="#"><i
                                                 class="fa-brands fa-facebook-f"></i></a></li>
                                     <li><a class="social-icon" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                     </li>
                                     <li><a class="social-icon" href="#"><i class="fa-brands fa-instagram"></i></a>
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
     <!-- Our Team End -->

     </div>
     </div>
     </div>
     </div>
     <!-- Contact Us Section End -->
 @endsection
