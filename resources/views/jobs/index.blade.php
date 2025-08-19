@extends('admin.master')

@section('content')
<div class="container">
    <h1>Jobs</h1>
    <a href="{{ route('jobs.create') }}" class="btn btn-primary mb-3">Add Job</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category ID</th>
                <th>City ID</th>
                <th>Country ID</th>
                <th>State ID</th>
                <th>Qualification</th>
                <th>Skills</th>
                <th>Role</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($jobs as $job)
                <tr>
                    <td>{{ $job->id }}</td>
                    <td>{!! $job->title !!}</td>
                    <td>{!! $job->description !!}</td>
                    <td>{{ $job->category_id }}</td>
                    <td>{{ $job->city_id }}</td>
                    <td>{{ $job->country_id }}</td>
                    <td>{{ $job->state_id }}</td>
                    <td>{{ $job->qualification }}</td>
                    <td>{{ $job->skills }}</td>
                    <td>{{ $job->role }}</td>
                    <td>{{ $job->status ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this job?');">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="12">No jobs found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
