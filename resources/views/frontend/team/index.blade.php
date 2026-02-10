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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Team</h1>
                        <nav class="simple-breadcrumb" aria-label="breadcrumb">
                            <a href="{{ route('home') }}">Home</a>
                            <span class="arrow">›</span>
                            <span class="current">Team</span>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Team Start -->
    <div class="page-team">
        <div class="container">
            <div class="row">

                @foreach ($team as $member)
                    <div class="col-lg-4 col-md-6">
                        <!-- Team Member Item Start -->
                        <div class="team-member-item wow fadeInUp">
                            <!-- Team Image Start -->
                            <div class="team-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}">
                                </figure>
                            </div>
                            <!-- Team Image End -->

                            <!-- Team Body Start -->
                            <div class="team-body">
                                <!-- Team content Start -->
                                <div class="team-content">
                                    <h3>{{ $member->name }}</h3>
                                    <p>{{ $member->position }}</p>
                                </div>
                                <!-- Team content End -->

                                <!-- Team Social Icon Start -->
                                <div class="team-social-icon">
                                    <ul>
                                        {{-- show only if links exist --}}
                                        @if (!empty($member->facebook))
                                            <li>
                                                <a class="social-icon" href="{{ $member->facebook }}" target="_blank">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>
                                        @endif

                                        @if (!empty($member->twitter))
                                            <li>
                                                <a class="social-icon" href="{{ $member->twitter }}" target="_blank">
                                                    <i class="fa-brands fa-x-twitter"></i>
                                                </a>
                                            </li>
                                        @endif

                                        @if (!empty($member->instagram))
                                            <li>
                                                <a class="social-icon" href="{{ $member->instagram }}" target="_blank">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                                <!-- Team Social Icon End -->
                            </div>
                            <!-- Team Body End -->
                        </div>
                        <!-- Team Member Item End -->
                    </div>
                @endforeach

                @if ($team->isEmpty())
                    <div class="col-12 text-center">
                        <p>No team members found.</p>
                    </div>
                @endif

            </div>
        </div>
    </div>
    <!-- Page Team End -->
@endsection
