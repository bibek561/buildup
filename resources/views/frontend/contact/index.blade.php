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
                         <h1 class="text-anime-style-3" data-cursor="-opaque">Contact</h1>
                         <nav class="simple-breadcrumb" aria-label="breadcrumb">
                             <a href="{{ route('home') }}">Home</a>
                             <span class="arrow">›</span>
                             <span class="current">Contact</span>
                         </nav>
                     </div>
                     <!-- Page Header Box End -->
                 </div>
             </div>
         </div>
     </div>
     <!-- Page Header End -->
     <!-- Contact Information Section Start -->
     <div class="contact-information">
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                     <!-- Contact Info Item Start -->
                     <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                         <div class="icon-box">
                             <img src="{{ asset('frontend/images/icon-phone.svg') }}" alt="">
                         </div>
                         <div class="contact-info-body">
                             <h3>call support center 24/7</h3>
                             <p>+1 809 120 6705</p>
                             <p>+1 809 120 6705</p>
                         </div>
                     </div>
                     <!-- Contact Info Item End -->
                 </div>

                 <div class="col-md-4">
                     <!-- Contact Info Item Start -->
                     <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                         <div class="icon-box">
                             <img src="{{ asset('frontend/images/icon-mail.svg') }}" alt="">
                         </div>
                         <div class="contact-info-body">
                             <h3>write to us</h3>
                             <p>info@domain.com</p>
                             <p>Support@domain.com</p>
                         </div>
                     </div>
                     <!-- Contact Info Item End -->
                 </div>

                 <div class="col-md-4">
                     <!-- Contact Info Item Start -->
                     <div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
                         <div class="icon-box">
                             <img src="{{ asset('frontend/images/icon-location.svg') }}" alt="">
                         </div>
                         <div class="contact-info-body">
                             <h3>visit us</h3>
                             <p>2972 Westheimer Rd. Santa Ana, Illinois 85486</p>
                         </div>
                     </div>
                     <!-- Contact Info Item End -->
                 </div>
             </div>
         </div>
     </div>
     <!-- Contact Information Section End -->

     <!-- Page Contact Us Start -->
     <div class="contact-us page-contact-us">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-8 col-md-7">
                     <!-- Contact Form start -->
                     <div class="contact-form wow fadeInUp" data-wow-delay="0.5s">
                         <!-- Section Title Start -->
                         <div class="section-title">
                             <h2 class="text-anime-style-3" data-cursor="-opaque">Ready to get started? let's chat.</h2>
                             <p>Please fill out the form below, and a member of our team will get back to you as soon as
                                 possible.</p>
                         </div>
                         <!-- Section Title End -->

                         <form id="contactForm" data-toggle="validator" action="{{ route('contact.store') }}"
                             method="POST">
                             @csrf

                             <div class="row">
                                 <!-- Name (Correct) -->
                                 <div class="form-group col-md-6 mb-3">
                                     <input class="form-control" id="name" type="text" name="name"
                                         placeholder="Enter Your name" required>
                                     <div class="help-block with-errors"></div>
                                 </div>

                                 <!-- Email (Correct) -->
                                 <div class="form-group col-md-6 mb-3">
                                     <input class="form-control" id="email" type="email" name="email"
                                         placeholder="Enter Your email" required>
                                     <div class="help-block with-errors"></div>
                                 </div>

                                 <!-- Phone - CHANGED from "phone" to "phone_number" -->
                                 <div class="form-group col-md-6 mb-3">
                                     <input class="form-control" id="phone" type="text" name="phone_number"
                                         placeholder="Phone number" required>
                                     <div class="help-block with-errors"></div>
                                 </div>

                                 <!-- Subject (Correct) -->
                                 <div class="form-group col-md-6 mb-3">
                                     <input class="form-control" id="subject" type="text" name="subject"
                                         placeholder="Subject" required>
                                     <div class="help-block with-errors"></div>
                                 </div>

                                 <!-- Message - CHANGED from "msg" to "message" -->
                                 <div class="form-group col-md-12 mb-4">
                                     <textarea class="form-control" id="msg" name="message" rows="3" placeholder="Message" required></textarea>
                                     <div class="help-block with-errors"></div>
                                 </div>

                                 <div class="col-md-12">
                                     <button class="btn-default" type="submit">Submit</button>
                                     <div class="h3 hidden" id="msgSubmit"></div>
                                 </div>
                             </div>
                         </form>
                     </div>
                     <!-- Contact Form end -->
                 </div>

                 <div class="col-lg-4 col-md-5">
                     <!-- Contact Sidebar Start -->
                     <div class="contact-sidebar page-contact-sidebar wow fadeInUp" data-wow-delay="0.5s">
                         <div class="contact-social-list">
                             <h3>follow us</h3>
                             <ul>
                                 <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                 <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                 <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                 <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                                 <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                             </ul>
                         </div>
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
             </div>
         </div>
     </div>
     <!-- Page Contact Us End -->

     <!-- Googme Map Start -->
     <div class="google-map">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-12">
                     <!-- Google Map Iframe Start -->
                     <div class="google-map-iframe">
                         <iframe
                             src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin"
                             allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                     <!-- Google Map Iframe End -->
                 </div>
             </div>
         </div>
     </div>
     <!-- Googme Map End -->
 @endsection
