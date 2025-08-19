@extends('admin.master')

@section('content')
<div class="container">
    <h1>Edit City</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Please fix the following issues:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cities.update', $city->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>City Name</label>
            <input type="text" name="name" class="form-control" value="{{ $city->name }}">
        </div>

        <div class="mb-3">
            <label>Country ID</label>
            <input type="number" name="country_id" class="form-control" value="{{ $city->country_id }}">
        </div>

        <div class="mb-3">
            <label>State ID</label>
            <input type="number" name="state_id" class="form-control" value="{{ $city->state_id }}">
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="1" {{ $city->status ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$city->status ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update City</button>
        <a href="{{ route('cities.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
