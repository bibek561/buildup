@extends('layouts.admin.master')
@section('title', 'All Reviews')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Reviews ({{ $review->total() }})</h5>
            <small class="text-muted float-end">
                <a class="btn btn-primary" href="{{ route('review.create') }}"><i class="fa-solid fa-plus"></i>
                    Create</a>
            </small>
        </div>

        <div class="table-responsive text-nowrap">
            @if (!$review->isEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>order</th>
                            <th>Status</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($review as $key => $reviews)
                            <tr>
                                <td><strong>{{ $key + $review->firstItem() }}</strong></td>
                                <td>
                                    <a class="fancybox" data-fancybox="demo"
                                        href="{{ asset('storage/' . $reviews->image) }}">
                                        <img src="{{ asset('storage/' . $reviews->image) }}" alt="{{ $reviews->name }}"
                                            width="80px">
                                    </a>
                                </td>

                                <td><strong>{{ $reviews->name ?? '' }}</strong></td>
                                <td><strong>{{ $reviews->order ?? '' }}</strong></td>
                                <td><span
                                        class="badge rounded-pill bg-label-{{ $reviews->status == 1 ? 'success' : 'danger' }}">{{ $reviews->status == 1 ? 'Publish' : 'Draft' }}</span>
                                </td>
                                <td>{{ $reviews->updated_at->diffForHumans() }}</td>
                                <td>

                                    <a class="btn btn-sm btn-primary" href="{{ route('review.edit', $reviews->id) }}"
                                        style="float: left;margin-right: 5px;"><i class="fa-solid fa-pen-to-square"></i>
                                        Edit</a>

                                    <form class="delete-form" action="{{ route('review.destroy', $reviews->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_review mr-2" id=""
                                            data-type="confirm" type="submit" title="Delete"><i class="fa fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $review->links() }}
            @else
                <div class="card-body">
                    <h6>No Data Found!</h6>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.delete_review').click(function(e) {
            e.preventDefault();
            swal({
                    title: `Are you sure?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $(this).closest("form").submit();
                    }
                });

        });
    </script>
@endsection
