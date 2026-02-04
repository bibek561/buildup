 @extends('layouts.frontend.master')
 @section('content')
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

                         <form id="contactForm" action="#" method="POST" data-toggle="validator">
                             <div class="row">
                                 <div class="form-group col-md-6 mb-3">
                                     <input type="text" name="name" class="form-control" id="name"
                                         placeholder="Enter Your name" required="">
                                     <div class="help-block with-errors"></div>
                                 </div>

                                 <div class="form-group col-md-6 mb-3">
                                     <input type="email" name="email" class="form-control" id="email"
                                         placeholder="Enter Your email" required="">
                                     <div class="help-block with-errors"></div>
                                 </div>

                                 <div class="form-group col-md-6 mb-3">
                                     <input type="text" name="phone" class="form-control" id="phone"
                                         placeholder="Phone number" required="">
                                     <div class="help-block with-errors"></div>
                                 </div>

                                 <div class="form-group col-md-6 mb-3">
                                     <input type="text" name="subject" class="form-control" id="subject"
                                         placeholder="Subject" required="">
                                     <div class="help-block with-errors"></div>
                                 </div>

                                 <div class="form-group col-md-12 mb-4">
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
