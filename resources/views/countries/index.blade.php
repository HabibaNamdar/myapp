@extends('admin.master')

@section('content')
<div class="container">
    <h1>Countries</h1>

    <a href="{{ route('countries.create') }}" class="btn btn-primary mb-3">Add Country</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($countries as $country)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $country->name }}</td>
                    <td>{{ $country->status ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('countries.destroy', $country->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No countries found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
