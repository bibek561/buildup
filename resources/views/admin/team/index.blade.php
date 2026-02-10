@extends('layouts.admin.master')
@section('title', 'All Teams')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Teams ({{ $team->total() }})</h5>
            <small class="text-muted float-end">
                <a class="btn btn-primary" href="{{ route('team.create') }}"><i class="fa-solid fa-plus"></i>
                    Create</a>
            </small>
        </div>

        <div class="table-responsive text-nowrap">
            @if (!$team->isEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($team as $key => $member)
                            <tr>
                                <td>
                                    <strong>{{ $key + $team->firstItem() }}</strong>
                                </td>

                                <td>
                                    <a class="fancybox" data-fancybox="demo"
                                        href="{{ asset('storage/' . $member->image) }}">
                                        <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}"
                                            width="80">
                                    </a>
                                </td>

                                <td><strong>{{ $member->name }}</strong></td>
                                <td>{{ $member->position }}</td>
                                <td>{{ $member->order }}</td>

                                <td>
                                    <span class="badge rounded-pill bg-label-{{ $member->status ? 'success' : 'danger' }}">
                                        {{ $member->status ? 'Publish' : 'Draft' }}
                                    </span>
                                </td>

                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('team.edit', $member->id) }}">
                                        <i class="fa-solid fa-pen-to-square"></i> Edit
                                    </a>

                                    <form class="delete-form d-inline" action="{{ route('team.destroy', $member->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_member" type="submit">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $team->links() }}
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
        $('.delete_member').click(function(e) {
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
