@extends('admin.master')

@section('content')
<div class="container mt-5">
    <h2>Edit Qualification</h2>
    <form action="{{ route('qualifications.update', $qualification->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Qualification Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $qualification->name) }}" required>
            @error('name') 
                <div class="text-danger">{{ $message }}</div> 
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('qualifications.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
