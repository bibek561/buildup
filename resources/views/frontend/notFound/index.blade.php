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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">404</h1>
                        <nav class="simple-breadcrumb" aria-label="breadcrumb">
                            <a href="{{ route('home') }}">Home</a>
                            <span class="arrow">›</span>
                            <span class="current">404</span>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    </div>
    </div>
    </div>
    </div>
    <!-- Page Header End -->

    <!-- error section start -->
    <div class="error-page">
        <div class="container">
            <div class="row">
                <div class="error-page-image wow fadeInUp" data-wow-delay="0.25s">
                    <img src="{{ asset('frontend/images/404-error-img.png') }}" alt="">
                </div>
                <div class="error-page-content">
                    <div class="error-page-content-heading">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Oops! page not found</h2>
                    </div>
                    <div class="error-page-content-body wow fadeInUp" data-wow-delay="0.25s">
                        <p>We're sorry, but the page you're looking for doesn't exist.</p>
                        <a class="btn-default" href="#">Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- error section end -->
@endsection
