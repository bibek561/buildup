@extends('layouts.admin.master')

@section('title', 'Create New Service')

@section('content')
    @include('admin.includes.message')

    <div class="content">
        <div class="card container-fluid mb-4 p-6">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Create Service</h3>
                <small class="text-muted float-end">
                    <a href="{{ route('services.index') }}" class="btn btn-sm btn-primary">
                        <i class="fa-solid fa-arrow-left"></i> Back
                    </a>
                </small>
            </div>

            <div class="card-body p-0">
                <form method="POST" class="row" action="{{ route('services.store') }}" enctype="multipart/form-data">
                    @csrf

                    @php
                        $fields = [
                            'name' => 'Name',
                            'description' => 'Description',
                        ];

                        $seo = [
                            'seo_title' => 'SEO Title',
                            'seo_keywords' => 'SEO Keywords',
                            'seo_description' => 'SEO Description',
                            'seo_schema' => 'SEO Schema',
                        ];
                    @endphp

                    <!-- Main Fields -->
                    <div class="col-md-8">
                        <div class="card-body card font-weight-bold br-8 mb-3">
                            @foreach ($fields as $name => $label)
                                <div class="form-group font-weight-bold mb-3">
                                    <label for="{{ $name }}">{{ $label }}</label>
                                    @if ($name == 'description')
                                        <textarea name="{{ $name }}" id="{{ $name }}" rows="10"
                                            class="form-control ckeditor br-8 @error($name) is-invalid @enderror" placeholder="Enter {{ strtolower($label) }}">{{ old($name) }}</textarea>
                                    @else
                                        <input type="text" name="{{ $name }}" value="{{ old($name) }}"
                                            class="form-control br-8 @error($name) is-invalid @enderror"
                                            placeholder="Enter {{ strtolower($label) }}">
                                    @endif
                                    @error($name)
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            @endforeach
                        </div>

                        <!-- SEO Fields -->
                        <div class="card-body card shadow br-8">
                            <h5 class="mb-4">SEO Details</h5>
                            @foreach ($seo as $name => $label)
                                <div class="form-group mb-3">
                                    <label for="{{ $name }}">{{ $label }}</label>
                                    @if (in_array($name, ['seo_description', 'seo_schema']))
                                        <textarea name="{{ $name }}" id="{{ $name }}" rows="{{ $name == 'seo_schema' ? 6 : 3 }}"
                                            class="form-control br-8 @error($name) is-invalid @enderror" placeholder="Enter {{ strtolower($label) }}">{{ old($name) }}</textarea>
                                    @else
                                        <input type="text" name="{{ $name }}" value="{{ old($name) }}"
                                            class="form-control br-8 @error($name) is-invalid @enderror"
                                            placeholder="Enter {{ strtolower($label) }}">
                                    @endif
                                    @error($name)
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Additional Fields -->
                    @include('admin.global.global')
                </form>
            </div>
        </div>
    </div>
@endsection

<!-- Inline Styles -->
<style>
    label {
        font-weight: 500 !important;
        text-transform: uppercase;
        margin-bottom: 5px;
        line-height: 200%;
    }
</style>
