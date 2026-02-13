@extends('layouts.admin.master')

@section('content')

<div class="container mt-4">
    <h2>Add Quote</h2>

    <form action="{{ route('quote.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <div class="mb-3">
            <label>Message</label>
            <textarea name="message" class="form-control"></textarea>
        </div>

        <button class="btn btn-success">Save</button>
    </form>
</div>

@endsection
