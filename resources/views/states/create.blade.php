@extends('admin.master')

@section('content')
<div class="container mt-5">
    <h2>Add New State</h2>

    <form action="{{ route('states.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">State Name</label>
            <input type="text" name="name" class="form-control" required>
            @error('name') 
                <div class="text-danger">{{ $message }}</div> 
            @enderror
        </div>

        <div class="mb-3">
            <label for="country_id" class="form-label">Select Country</label>
            <select name="country_id" class="form-control" required>
                <option value="">-- Select Country --</option>
                @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
            @error('country_id') 
                <div class="text-danger">{{ $message }}</div> 
            @enderror
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('states.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
