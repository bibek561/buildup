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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">About</h1>
                        <nav class="simple-breadcrumb" aria-label="breadcrumb">
                            <a href="{{ route('home') }}">Home</a>
                            <span class="arrow">›</span>
                            <span class="current">About</span>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-5">

                        <h2 class="text-center mb-4 fw-bold">Get Free Quote</h2>

                        {{-- Success Message --}}
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('quote.store') }}" method="POST">
                            @csrf

                            {{-- Name --}}
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Full Name</label>
                                <input class="form-control form-control-lg @error('name') is-invalid @enderror"
                                    type="text" name="name" value="{{ old('name') }}"
                                    placeholder="Enter your full name">

                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Email Address</label>
                                <input class="form-control form-control-lg @error('email') is-invalid @enderror"
                                    type="email" name="email" value="{{ old('email') }}"
                                    placeholder="Enter your email">

                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Phone --}}
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Phone Number</label>
                                <input class="form-control form-control-lg @error('phone') is-invalid @enderror"
                                    type="text" name="phone" value="{{ old('phone') }}"
                                    placeholder="Enter your phone number">

                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Message --}}
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Your Quote</label>
                                <textarea class="form-control form-control-lg @error('message') is-invalid @enderror" name="message" rows="4"
                                    placeholder="Tell us about your project">{{ old('message') }}</textarea>

                                @error('message')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Button --}}
                            <div class="d-grid">
                                <button class="btn btn-warning btn-lg rounded-pill fw-bold" type="submit">
                                    Submit Quote Request
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
