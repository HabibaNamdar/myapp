@extends('admin.master')

@section('content')
<div class="container mt-5">
    <h2>Add Skill</h2>
    <form action="{{ route('skills.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Skill Name</label>
            <input type="text" name="name" class="form-control" required>
            @error('name') 
                <div class="text-danger">{{ $message }}</div> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('skills.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
