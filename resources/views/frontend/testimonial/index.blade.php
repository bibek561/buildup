@extends('layouts.frontend.master')
{{-- @section('seo')
    @include('frontend.seo.seo', [
        'name' => $setting['testimonial_seo_title'] ?? '',
        'title' => $setting['testimonial_seo_title'] ?? '',
        'description' => $setting['testimonial_seo_description'] ?? '',
        'keyword' => $setting['testimonial_seo_keywords'] ?? '',
        'schema' => $setting['testimonial_seo_schema'] ?? '',
    ]) --}}
@endsection
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h1 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Testimonial</h1>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active text-secondary">Testimonial</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial overflow-hidden py-1">
        <div class="container py-5">
            <div class="row">
                @foreach ($reviews as $review)
                    <div class="col-md-6 mb-4">
                        <div class="testimonial-item">
                            <div class="testimonial-content p-4 mb-4 border rounded shadow-sm">
                                <p class="fs-5 mb-3">{!! strip_tags($review->description) !!}</p>
                                <div class="d-flex justify-content-end">
                                    <!-- Static stars -->
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <div class="rounded-circle me-3 overflow-hidden" style="width: 80px; height: 80px;">
                                    <img class="img-fluid" src="{{ asset('storage/' . $review->image) }}"
                                        alt="{{ $review->name }}">
                                </div>
                                <div>
                                    <h5 class="mb-1">{{ $review->name }}</h5>
                                    <small class="text-muted">{{ $review->position ?? 'Position Not Provided' }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Testimonial End -->
@endsection
<style>
    .bg-breadcrumb {
        background: linear-gradient(rgba(0, 58, 102, 0.9), rgba(0, 58, 102, 0.8)), url('{{ asset($setting['site_breadcrumb_banner']) }}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 0px 0 0px 0;
    }
</style>