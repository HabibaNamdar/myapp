@extends('admin.master')

@section('content')
<div class="container">
    <h1>Cities</h1>

    <a href="{{ route('cities.create') }}" class="btn btn-primary mb-3">Add City</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Country ID</th>
                <th>State ID</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cities as $city)
                <tr>
                    <td>{{ $city->id }}</td>
                    <td>{{ $city->name }}</td>
                    <td>{{ $city->country_id }}</td>
                    <td>{{ $city->state_id }}</td>
                    <td>{{ $city->status ? 'Active' : 'Inactive' }}</td>
                    <td>{{ $city->created_at }}</td>
                    <td>{{ $city->updated_at }}</td>
                    <td>
                        <a href="{{ route('cities.edit', $city->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('cities.destroy', $city->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this city?');">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">No cities found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
