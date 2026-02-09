@extends('layouts.frontend.master')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">
                            Frequently Asked Questions
                        </h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">home</a>
                                </li>
                                <li class="breadcrumb-item active">faqs</li>
                            </ol>
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
                                Building construction
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
