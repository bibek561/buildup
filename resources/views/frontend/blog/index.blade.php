@extends('layouts.frontend.master')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Blog</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('frontend.blog') }}">home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">

                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item wow fadeInUp">

                            <!-- Post Featured Image Start-->
                            <div class="post-featured-image" data-cursor-text="View">
                                <figure>
                                    <a class="image-anime"
                                        href="{{ route('frontend.blog.show', ['slug' => $post->slug]) }}">
                                        <img src="{{ asset('storage/' . $post->figure) }}" alt="{{ $post->name }}">
                                    </a>
                                </figure>
                            </div>
                            <!-- Post Featured Image End -->

                            <!-- post Item Content Start -->
                            <div class="post-item-content">

                                <!-- post Item Body Start -->
                                <div class="post-item-body">
                                    <h2>
                                        <a href="{{ route('frontend.blog.show', ['slug' => $post->slug]) }}">
                                            {{ $post->name }}
                                        </a>
                                    </h2>
                                </div>
                                <!-- Post Item Body End-->

                                <!-- Post Item Footer Start-->
                                <div class="post-item-footer">
                                    <a class="readmore-btn"
                                        href="{{ route('frontend.blog.show', ['slug' => $post->slug]) }}">
                                        read more
                                    </a>
                                </div>
                                <!-- Post Item Footer End-->

                            </div>
                            <!-- post Item Content End -->
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Pagination (Optional) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="post-pagination wow fadeInUp" data-wow-delay="0.75s">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Page Blog End -->
@endsection
