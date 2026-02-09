@extends('layouts.admin.master')

@section('title', 'Edit ' . $project->name)

@section('content')
    @include('admin.includes.message')

    <div class="content">
        <div class="card container-fluid mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Project - {{ $project->name }}</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-sm btn-primary" href="{{ route('project.index') }}"><i
                            class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body p-0">
                <form class="row" method="POST" action="{{ route('project.update', $project->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="col-md-8">
                        <div class="card card-body main-description shadow br-8 p-4">
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input class="form-control br-8 @error('name') is-invalid @enderror" type="text"
                                    name="name" value="{{ old('name', $project->name) }}" placeholder="Enter Name">
                                @error('name')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea class="form-control ckeditor br-8 @error('description') is-invalid @enderror" id="description"
                                    name="description" rows="10" placeholder="Enter Description">{{ old('description', $project->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card card-body seo my-5 shadow br-8 p-4">
                            <fieldset class="border p-3">
                                <legend class="float-none w-auto legend-title">SEO</legend>
                                <div class="form-group mb-3">
                                    <label for="seo_title">SEO Title</label>
                                    <input class="form-control br-8" type="text" name="seo_title"
                                        value="{{ old('seo_title', $service->seo_title) }}" placeholder="Enter SEO Title">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="seo_description">SEO Description</label>
                                    <textarea class="form-control br-8" name="seo_description" rows="4" placeholder="Enter SEO Description">{{ old('seo_description', $project->seo_description) }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="seo_keywords">SEO Keywords</label>
                                    <textarea class="form-control br-8" name="seo_keywords" rows="4" placeholder="Enter SEO Keywords">{{ old('seo_keywords', $project->seo_keywords) }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="seo_schema">SEO Schema</label>
                                    <textarea class="form-control br-8" name="seo_schema" rows="4" placeholder="Enter SEO Schema">{{ old('seo_schema', $project->seo_schema) }}</textarea>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body card shadow br-8">
                            <div class="form-group mb-3 d-flex align-items-center">
                                <label class="m-0 p-0">Status</label>
                                <select class="form-select ms-5" id="status" name="status">
                                    <option class="p-3" value="0" @if ($project->status == 0) selected @endif>
                                        Draft</option>
                                    <option class="p-3" value="1" @if ($project->status == 1) selected @endif>
                                        Publish</option>
                                </select>
                            </div>
                        </div>

                        <hr class="shadow-sm">

                        <div class="form-group mb-3 d-flex align-items-center">
                            <label for="order">Order</label>
                            <input class="form-control ms-5 @error('order') is-invalid @enderror" type="number"
                                name="order" value="{{ old('order', $project->order) }}" placeholder="Enter Order">
                            @error('order')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <hr class="shadow-sm">

                        <div class="form-group mb-3 mt-2">
                            <label for="image">Featured Image</label>
                            <div class="custom-file">
                                <input class="dropify @error('image') is-invalid @enderror" id="image"
                                    data-show-remove="false" data-default-file="{{ asset('storage/' . $project->image) }}"
                                    type="file" name="image">
                                @error('image')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <hr class="shadow-sm">

                        <div class="form-group mb-3 mt-2">
                            <label for="image">Banner Image</label>
                            <div class="custom-file">
                                <input class="dropify @error('banner_image') is-invalid @enderror" id="banner_image"
                                    data-show-remove="false"
                                    data-default-file="{{ asset('storage/' . $project->banner_image) }}" type="file"
                                    name="banner_image">
                                @error('banner_image')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <hr class="shadow-sm">

                        <div class="card-footers d-flex justify-content-center">
                            <button class="btn btn-sm btn-primary" type="submit"><i class="fa-solid fa-rotate"></i>
                                Update</button>
                        </div>

                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection

<!-- Style -->
<style>
    label {
        font-weight: 500 !important;
        text-transform: uppercase;
        margin-bottom: 5px;
        line-height: 200%;
    }
</style>
