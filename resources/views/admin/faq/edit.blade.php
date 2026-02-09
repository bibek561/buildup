@extends('layouts.admin.master')
@section('title', 'Edit '.$faq->name)

@section('content')
    @include('admin.includes.message')

    <div class="content">
        <div class="card container-fluid mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Faqs - {{ $faq->name }}</h5>
                <small class="text-muted float-end">
                    <a href="{{ route('faq.index') }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body p-0">
                <form method="POST" class="row" action="{{ route('faq.update', $faq->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="col-md-9">
                        <div class="card card-body main-description shadow br-8 p-4 mb-3">
                            <div class="form-group mb-3">
                                <label for="question">question</label>
                                <input type="text" name="question" value="{{ old('question', $faq->question) }}" class="form-control br-8 @error('question') is-invalid @enderror" placeholder="Enter Question">
                                @error('question')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="answer">Answer</label>
                                <textarea name="answer" id="answer" rows="10" class="form-control ckeditor br-8 @error('answer') is-invalid @enderror"
                                    placeholder="Enter Answer">{{ old('answer', $faq->answer) }}</textarea>
                                @error('answer')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body card shadow br-8">
                            <div class="form-group mb-3 d-flex align-items-center">
                                <label class="m-0 p-0">Status</label>
                                <select name="status" id="status" class="form-select ms-5">
                                    <option value="0" class="p-3" @if($faq->status == 0) selected @endif>Draft</option>
                                    <option value="1" class="p-3"@if($faq->status == 1) selected @endif>Publish</option>
                                </select>
                            </div>

                            <hr class="shadow-sm">

                             <div class="form-group mb-3 d-flex align-items-center">
                                <label for="order">Order</label>
                                <input type="number" name="order" value="{{ old('order',$faq->order) }}" class="form-control ms-5 @error('order') is-invalid @enderror" placeholder="Enter Order">
                                @error('order')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <hr class="shadow-sm">

                            <div class="card-footers">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa-solid fa-rotate"></i> Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection