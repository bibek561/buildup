@extends('layouts.frontend.master')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Our Projects</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.project') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">projects</li>
                            </ol>
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
