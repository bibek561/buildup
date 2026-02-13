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
                         <h1 class="text-anime-style-3" data-cursor="-opaque">FAQ</h1>
                         <nav class="simple-breadcrumb" aria-label="breadcrumb">
                             <a href="{{ route('home') }}">Home</a>
                             <span class="arrow">›</span>
                             <span class="current">FAQ</span>
                         </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Faqs Start -->
    <div class="page-faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="faq-section" id="faq-1">
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">
                                Frequently Asked Quesion
                            </h2>
                        </div>

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">

                            @foreach ($faqs as $key => $faq)
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading{{ $key }}">
                                        <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}"
                                            data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}"
                                            type="button" aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                            aria-controls="collapse{{ $key }}">
                                            {{ strip_tags($faq['question']) }}
                                        </button>
                                    </h2>

                                    <div class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                        id="collapse{{ $key }}" data-bs-parent="#accordion"
                                        aria-labelledby="heading{{ $key }}">
                                        <div class="accordion-body">
                                            {!! $faq['answer'] !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <!-- FAQ Accordion End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Faqs End -->
@endsection
