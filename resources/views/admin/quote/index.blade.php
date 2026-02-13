@extends('layouts.admin.master')

@section('content')

<div class="container mt-4">
    <h2>All Quotes</h2>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quotes as $quote)
            <tr>
                <td>{{ $quote->id }}</td>
                <td>{{ $quote->name }}</td>
                <td>{{ $quote->email }}</td>
                <td>{{ $quote->phone }}</td>
                <td>{{ $quote->message }}</td>
                <td>
                    <a href="{{ route('quote.edit', $quote->id) }}" class="btn btn-sm btn-primary">Edit</a>

                    <form action="{{ route('quote.destroy', $quote->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
