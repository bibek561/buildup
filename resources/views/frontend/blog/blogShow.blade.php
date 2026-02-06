@extends('layouts.frontend.master')
{{-- @section('seo')
    @include('frontend.seo.seo', [
        'name' => $post->name,
        'title' => $post->seo_title ?? $post->name,
        'description' => $post->seo_description ?? '',
        'keyword' => $post->seo_description ?? '',
        'schema' => $post->seo_schema ?? '',
        'created_at' => $post->created_at,
        'updated_at' => $post->updated_at,
        'image' => $post->image,
    ])
@endsection --}}
@section('content')
    <style>
        .bg-breadcrumb {
            background: linear-gradient(rgba(0, 58, 102, 0.9), rgba(0, 58, 102, 0.8)), url('{{ asset('storage/' . $post->banner_image) }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 0px 0 0px 0;
        }

        .post-description img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 10px auto;
        }
    </style>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h1 class="responsive-text text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ $post->name ?? '' }}
            </h1>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('frontend.blog') }}">Blog</a></li>
                <li class="breadcrumb-item active text-secondary">{{ $post->name ?? '' }}</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
    <div class="container py-5">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="post-detail-card bg-white rounded shadow-sm p-4">
                    <div class="text-centre" style="text-align: center;">
                        <img class="img-fluid rounded-4 mb-4 " style="object-fit: contain; height: auto; width: auto;"
                            src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->name }}">
                    </div>
                    <div class="post-description mt-4">
                        <p class="lead">{!! $post->description !!}</p>
                    </div>
                </div>
            </div>

            <!-- Sidebar Column -->
            <div class="col-lg-4">
                <div class="sidebar sticky-sidebar">
                    <div class="bg-white rounded shadow-sm p-4">
                        <h4 class="sidebar-title text-center text-primary mb-4">Popular Blogs</h4>
                        <ul class="list-unstyled">
                            @foreach ($popular_post as $popular_posts)
                                <li class="d-flex mb-3">
                                    <img class="img-fluid rounded me-3"
                                        src="{{ asset('storage/' . $popular_posts->image) }}"
                                        alt="{{ $popular_posts->name }}"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                    <a class="text-dark"
                                        href="{{ route('frontend.blog.show', ['slug' => $popular_posts->slug]) }}">{{ $popular_posts->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
