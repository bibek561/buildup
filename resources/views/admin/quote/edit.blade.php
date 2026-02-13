@extends('layouts.admin.master')

@section('content')

<div class="container mt-4">
    <h2>Edit Quote</h2>

    <form action="{{ route('quote.update', $quote->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $quote->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $quote->email }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" value="{{ $quote->phone }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Message</label>
            <textarea name="message" class="form-control">{{ $quote->message }}</textarea>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
