@extends('admin.master')

@section('content')
<div class="container">
    <h1>Add Country</h1>

    <form action="{{ route('countries.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Country Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            @error('name') 
                <div class="text-danger">{{ $message }}</div> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-control" required>
                <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
            @error('status') 
                <div class="text-danger">{{ $message }}</div> 
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('countries.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
