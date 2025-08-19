@extends('admin.master')

@section('content')
<div class="container">
    <h1>Edit Job</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('jobs.update', $job->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $job->title }}">
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $job->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Category ID</label>
            <input type="number" name="category_id" class="form-control" value="{{ $job->category_id }}">
        </div>
        <div class="mb-3">
            <label>City ID</label>
            <input type="number" name="city_id" class="form-control" value="{{ $job->city_id }}">
        </div>
        <div class="mb-3">
            <label>Country ID</label>
            <input type="number" name="country_id" class="form-control" value="{{ $job->country_id }}">
        </div>
        <div class="mb-3">
            <label>State ID</label>
            <input type="number" name="state_id" class="form-control" value="{{ $job->state_id }}">
        </div>
        <div class="mb-3">
            <label>Qualification</label>
            <input type="text" name="qualification" class="form-control" value="{{ $job->qualification }}">
        </div>
        <div class="mb-3">
            <label>Skills</label>
            <input type="text" name="skills" class="form-control" value="{{ $job->skills }}">
        </div>
        <div class="mb-3">
            <label>Role</label>
            <input type="text" name="role" class="form-control" value="{{ $job->role }}">
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="1" {{ $job->status ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$job->status ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update Job</button>
        <a href="{{ route('jobs.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
