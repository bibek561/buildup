@extends('layouts.admin.master')
@section('title', 'Dashboard - ParadiseCourse Education and Services')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold">Hello Admin!</h5>
                            <p class="mb-4">
                                Welcome to <span class="fw-bold">ParadiseCourse</span> Admin Panel.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png"
                                src="{{ asset('admin/assets/img/illustrations/man-with-laptop-light.png') }}" height="140"
                                alt="View Badge User" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-4 order-1">
            <div class="row">
                <div class="col-md-4 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <i class="menu-icon dash-icon tf-icons bx bxs-contact"></i>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Contacts</span>

                            {{-- <h3 class="card-title mb-2">{{ $contacts->count() ?? 0 }}</h3> --}}

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <i class="menu-icon dash-icon tf-icons bx bx-news"></i>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Posts</span>

                            {{-- <h3 class="card-title mb-2">{{ $posts->count() ?? 0 }}</h3> --}}

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <i class="menu-icon dash-icon tf-icons bx bxs-quote-alt-left"></i>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Reviews</span>

                            {{-- <h3 class="card-title mb-2">{{ $reviews->count() ?? 0 }}</h3> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
