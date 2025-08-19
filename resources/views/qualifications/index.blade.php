@extends('admin.master')

@section('content')
<div class="container mt-5">
    <h2>Qualifications</h2>
    <a href="{{ route('qualifications.create') }}" class="btn btn-primary mb-3">Add Qualification</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        @foreach ($qualifications as $qualification)
            <tr>
                <td>{{ $qualification->id }}</td>
                <td>{{ $qualification->name }}</td>
                <td>
                    <a href="{{ route('qualifications.edit', $qualification->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('qualifications.destroy', $qualification->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
