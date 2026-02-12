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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Service</h1>
                        <nav class="simple-breadcrumb" aria-label="breadcrumb">
                            <a href="{{ route('home') }}">Home</a>
                            <span class="arrow">›</span>
                            <span class="current">Service</span>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
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
