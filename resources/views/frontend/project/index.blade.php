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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Project</h1>
                        <nav class="simple-breadcrumb" aria-label="breadcrumb">
                            <a href="{{ route('home') }}">Home</a>
                            <span class="arrow">›</span>
                            <span class="current">Project</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Project Start -->
    <div class="page-project">
        <div class="container">
            <div class="row">
                @foreach ($project as $project)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="project-item wow fadeInUp">
                            <!-- Project Image -->
                            <div class="project-image" data-cursor-text="View">
                                <a href="{{ route('frontend.project.show', ['slug' => $project->slug]) }}">
                                    <figure>
                                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                                    </figure>
                                </a>
                            </div>

                            <!-- Project Body -->
                            <div class="project-body">
                                <div class="project-body-title">
                                    <h3>{{ $project->name ?? '' }}</h3>
                                </div>
                                <div class="project-content">
                                    <p>{{ Str::limit(strip_tags($project->description), 100) }}</p>
                                    <div class="project-content-footer">
                                        <a class="readmore-btn"
                                            href="{{ route('frontend.project.show', ['slug' => $project->slug]) }}">view
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    <!-- Page Project End -->
@endsection
