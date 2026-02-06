@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $services->name,
        'title' => $services->seo_title ?? $services->name,
        'description' => $services->seo_description ?? '',
        'keyword' => $services->seo_description ?? '',
        'schema' => $services->seo_schema ?? '',
        'created_at' => $services->created_at,
        'updated_at' => $services->updated_at,
    ])
@endsection
@section('content')
    <style>
        .bg-breadcrumb {
            background: linear-gradient(rgba(0, 58, 102, 0.9), rgba(0, 58, 102, 0.8)), url('{{ asset('storage/' . $services->banner_image) }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 0px 0 0px 0;
        }
    </style>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ $services->name }}</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('frontend.services') }}">Services</a>
                    </li>
                    <li class="breadcrumb-item active text-secondary">{{ $services->name }}</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->
    <div class="container py-5">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="abroad-detail-card bg-white rounded shadow-sm p-4">
                    <div class="text-centre" style="text-align: center;">
                        <img class="img-fluid rounded mb-4 " style="object-fit: contain; height: auto; width: auto;"
                            src="{{ asset('storage/' . $services->image) }}" alt="{{ $services->name }}">
                    </div>
                    <div class="abroad-description mt-4">
                        <p class="lead">{!! $services->description !!}</p>
                    </div>
                </div>
            </div>

            <!-- Sidebar Column -->
            <div class="col-lg-4">
                <div class="sidebar sticky-sidebar">
                    <div class="bg-white rounded shadow-sm p-4">
                        <h4 class="sidebar-title text-center text-primary mb-4">Popular Services
                        </h4>
                        <ul class="list-unstyled">
                            @foreach ($popular_services as $popular_service)
                                <li class="d-flex mb-3">
                                    <img class="img-fluid rounded me-3"
                                        src="{{ asset('storage/' . $popular_service->image) }}"
                                        alt="{{ $popular_service->name }}"
                                        style="width:60px;height:60px;object-fit:contain;">
                                    <a class="text-dark"style="margin-top: 20px;"
                                        href="{{ route('frontend.services', ['slug' => $popular_service->slug]) }}">{{ $popular_service->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
