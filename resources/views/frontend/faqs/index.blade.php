@extends('layouts.frontend.master')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Frequently Asked Questions</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('faqs') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">faqs</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Faqs Start -->
    <div class="page-faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="faq-sidebar">
                        <!-- Faqs Category Box Start -->
                        <div class="faq-category-box wow fadeInUp">
                            <ul>
                                <li><a href="#faq-1">building construction</a></li>
                                <li><a href="#faq-2">materials</a></li>
                                <li><a href="#faq-3">technology</a></li>
                                <li><a href="#faq-4">materials</a></li>
                                <li><a href="#faq-5">designing</a></li>
                                <li><a href="#faq-6">blue print</a></li>
                            </ul>
                        </div>
                        <!-- Faqs Category Box End -->
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- FAQs section Start -->
                    <div class="faq-section" id="faq-1">
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Building construction</h2>
                        </div>

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Do you offer a free, no obligation quotation?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What services do you offer?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What types of projects do you specialize in?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                <h2 class="accordion-header" id="headingfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        How do I start a project with your company?
                                    </button>
                                </h2>
                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- FAQs section End -->

                    <!-- FAQs section Start -->
                    <div class="faq-section" id="faq-2">
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Materials</h2>
                        </div>

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion_1">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="headingeleven">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseeleven" aria-expanded="true"
                                        aria-controls="collapseeleven">
                                        Do you offer a free, no obligation quotation?
                                    </button>
                                </h2>
                                <div id="collapseeleven" class="accordion-collapse collapse show"
                                    aria-labelledby="headingeleven" data-bs-parent="#accordion_1">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                <h2 class="accordion-header" id="headingtwelve">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsetwelve" aria-expanded="false"
                                        aria-controls="collapsetwelve">
                                        What services do you offer?
                                    </button>
                                </h2>
                                <div id="collapsetwelve" class="accordion-collapse collapse"
                                    aria-labelledby="headingtwelve" data-bs-parent="#accordion_1">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="headingthirteen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsethirteen" aria-expanded="false"
                                        aria-controls="collapsethirteen">
                                        What types of projects do you specialize in?
                                    </button>
                                </h2>
                                <div id="collapsethirteen" class="accordion-collapse collapse"
                                    aria-labelledby="headingthirteen" data-bs-parent="#accordion_1">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                <h2 class="accordion-header" id="headingfourteen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefourteen" aria-expanded="false"
                                        aria-controls="collapsefourteen">
                                        How do I start a project with your company?
                                    </button>
                                </h2>
                                <div id="collapsefourteen" class="accordion-collapse collapse"
                                    aria-labelledby="headingfourteen" data-bs-parent="#accordion_1">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- FAQs section End -->

                    <!-- FAQs section Start -->
                    <div class="faq-section" id="faq-3">
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Technology</h2>
                        </div>

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion_2">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="headingtwentyone">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsetwentyone" aria-expanded="true"
                                        aria-controls="collapsetwentyone">
                                        Do you offer a free, no obligation quotation?
                                    </button>
                                </h2>
                                <div id="collapsetwentyone" class="accordion-collapse collapse show"
                                    aria-labelledby="headingtwentyone" data-bs-parent="#accordion_2">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                <h2 class="accordion-header" id="headingtwentytwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsetwentytwo" aria-expanded="false"
                                        aria-controls="headingtwentytwo">
                                        What services do you offer?
                                    </button>
                                </h2>
                                <div id="collapsetwentytwo" class="accordion-collapse collapse"
                                    aria-labelledby="collapsetwentytwo" data-bs-parent="#accordion_2">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="headingtwentythree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsetwentythree" aria-expanded="false"
                                        aria-controls="collapsetwentythree">
                                        What types of projects do you specialize in?
                                    </button>
                                </h2>
                                <div id="collapsetwentythree" class="accordion-collapse collapse"
                                    aria-labelledby="headingtwentythree" data-bs-parent="#accordion_2">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                <h2 class="accordion-header" id="headingtwentyfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsetwentyfour" aria-expanded="false"
                                        aria-controls="collapsetwentyfour">
                                        How do I start a project with your company?
                                    </button>
                                </h2>
                                <div id="collapsetwentyfour" class="accordion-collapse collapse"
                                    aria-labelledby="headingtwentyfour" data-bs-parent="#accordion_2">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- FAQs section End -->

                    <!-- FAQs section Start -->
                    <div class="faq-section" id="faq-4">
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Materials</h2>
                        </div>

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion_3">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="headingthirtyone">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsethirtyone" aria-expanded="true"
                                        aria-controls="collapsethirtyone">
                                        Do you offer a free, no obligation quotation?
                                    </button>
                                </h2>
                                <div id="collapsethirtyone" class="accordion-collapse collapse show"
                                    aria-labelledby="headingthirtyone" data-bs-parent="#accordion_3">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                <h2 class="accordion-header" id="headingthirtytwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsethirtytwo" aria-expanded="false"
                                        aria-controls="headingthirtytwo">
                                        What services do you offer?
                                    </button>
                                </h2>
                                <div id="collapsethirtytwo" class="accordion-collapse collapse"
                                    aria-labelledby="collapsethirtytwo" data-bs-parent="#accordion_3">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="headingthirtythree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsethirtythree" aria-expanded="false"
                                        aria-controls="collapsethirtythree">
                                        What types of projects do you specialize in?
                                    </button>
                                </h2>
                                <div id="collapsethirtythree" class="accordion-collapse collapse"
                                    aria-labelledby="headingthirtythree" data-bs-parent="#accordion_3">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                <h2 class="accordion-header" id="headingthirtyfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsethirtyfour" aria-expanded="false"
                                        aria-controls="collapsethirtyfour">
                                        How do I start a project with your company?
                                    </button>
                                </h2>
                                <div id="collapsethirtyfour" class="accordion-collapse collapse"
                                    aria-labelledby="headingthirtyfour" data-bs-parent="#accordion_3">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- FAQs section End -->

                    <!-- FAQs section Start -->
                    <div class="faq-section" id="faq-5">
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Designing</h2>
                        </div>

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion_4">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="headingfourtyone">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefourtyone" aria-expanded="true"
                                        aria-controls="collapsefourtyone">
                                        Do you offer a free, no obligation quotation?
                                    </button>
                                </h2>
                                <div id="collapsefourtyone" class="accordion-collapse collapse show"
                                    aria-labelledby="headingfourtyone" data-bs-parent="#accordion_4">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                <h2 class="accordion-header" id="headingfourtytwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefourtytwo" aria-expanded="false"
                                        aria-controls="headingfourtytwo">
                                        What services do you offer?
                                    </button>
                                </h2>
                                <div id="collapsefourtytwo" class="accordion-collapse collapse"
                                    aria-labelledby="collapsefourtytwo" data-bs-parent="#accordion_4">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="headingfourtythree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefourtythree" aria-expanded="false"
                                        aria-controls="collapsefourtythree">
                                        What types of projects do you specialize in?
                                    </button>
                                </h2>
                                <div id="collapsefourtythree" class="accordion-collapse collapse"
                                    aria-labelledby="headingfourtythree" data-bs-parent="#accordion_4">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                <h2 class="accordion-header" id="headingfourtyfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefourtyfour" aria-expanded="false"
                                        aria-controls="collapsefourtyfour">
                                        How do I start a project with your company?
                                    </button>
                                </h2>
                                <div id="collapsefourtyfour" class="accordion-collapse collapse"
                                    aria-labelledby="headingfourtyfour" data-bs-parent="#accordion_4">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- FAQs section End -->

                    <!-- FAQs section Start -->
                    <div class="faq-section" id="faq-6">
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Blue print</h2>
                        </div>

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion_5">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="headingfiftyone">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefiftyone" aria-expanded="true"
                                        aria-controls="collapsefiftyone">
                                        Do you offer a free, no obligation quotation?
                                    </button>
                                </h2>
                                <div id="collapsefiftyone" class="accordion-collapse collapse show"
                                    aria-labelledby="headingfiftyone" data-bs-parent="#accordion_5">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                <h2 class="accordion-header" id="headingfiftytwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefiftytwo" aria-expanded="false"
                                        aria-controls="headingfiftytwo">
                                        What services do you offer?
                                    </button>
                                </h2>
                                <div id="collapsefiftytwo" class="accordion-collapse collapse"
                                    aria-labelledby="collapsefiftytwo" data-bs-parent="#accordion_5">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="headingfiftythree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefiftythree" aria-expanded="false"
                                        aria-controls="collapsefiftythree">
                                        What types of projects do you specialize in?
                                    </button>
                                </h2>
                                <div id="collapsefiftythree" class="accordion-collapse collapse"
                                    aria-labelledby="headingfiftythree" data-bs-parent="#accordion_5">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                                <h2 class="accordion-header" id="headingfiftytfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefiftytfour" aria-expanded="false"
                                        aria-controls="collapsefiftytfour">
                                        How do I start a project with your company?
                                    </button>
                                </h2>
                                <div id="collapsefiftytfour" class="accordion-collapse collapse"
                                    aria-labelledby="headingfiftytfour" data-bs-parent="#accordion_5">
                                    <div class="accordion-body">
                                        <p>Our post-construction services gives you peace of mind knowing that we are still
                                            here for you even after.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- FAQs section End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Faqs End -->

    </div>
    </div>
    </div>
    </div>
    <!-- Contact Us Section End -->
@endsection
