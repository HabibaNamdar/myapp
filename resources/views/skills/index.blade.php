@extends('admin.master')

@section('content')
<div class="container mt-5">
    <h2>Skills List</h2>
    <a href="{{ route('skills.create') }}" class="btn btn-primary mb-3">Add New Skill</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Skill Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($skills as $skill)
            <tr>
                <td>{{ $skill->id }}</td>
                <td>{{ $skill->name }}</td>
                <td>{{ $skill->description }}</td>
                <td>
                    <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" style="display:inline;">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" 
                            onclick="return confirm('Are you sure you want to delete this skill?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
