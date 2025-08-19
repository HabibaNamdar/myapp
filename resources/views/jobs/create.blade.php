@extends('admin.master')

@section('content')
<div class="container">
    <h1>Add New Job</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label>Category </label>
        <select name="category_id" class="form-control"  id="category_id">
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
            {{-- <input type="number" name="category_id" class="form-control" value="{{ old('category_id') }}"> --}}
        </div>
        <div class="mb-3">
             <label>City </label>
        <select name="city_id" class="form-control"  id="city_id">
            <option value="">Select City</option>
            @foreach($cities as $city)
                <option value="{{ $city->id }}" {{ old('city_id') == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
            @endforeach
        </select>
            {{-- <input type="number" name="city_id" class="form-control" value="{{ old('city_id') }}"> --}}
        </div>
        <div class="mb-3">
            <label>Country ID</label>
            <select name="country_id" class="form-control"  id="country_id">
            <option value="">Select Country</option>
            @foreach($countries as $country)
                <option value="{{ $country->id }}" {{ old('countryy_id') == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
            @endforeach
        </select>
            {{-- <input type="number" name="country_id" class="form-control" value="{{ old('country_id') }}"> --}}
        </div>
        <div class="mb-3">
            <label>State ID</label>
            <select name="state_id" class="form-control"  id="state_id">
            <option value="">Select State</option>
            @foreach($states as $state)
                <option value="{{ $state->id }}" {{ old('state_id') == $state->id ? 'selected' : '' }}>{{ $state->name }}</option>
            @endforeach
        </select>
            {{-- <input type="number" name="state_id" class="form-control" value="{{ old('state_id') }}"> --}}
        </div>
        <div class="mb-3">
            <label>Qualification</label>
            <input type="text" name="qualification" class="form-control" value="{{ old('qualification') }}">
        </div>
        <div class="mb-3">
            <label>Skills</label>
            <input type="text" name="skills" class="form-control" value="{{ old('skills') }}">
        </div>
        <div class="mb-3">
            <label>Role</label>
            <input type="text" name="role" class="form-control" value="{{ old('role') }}">
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Save Job</button>
        <a href="{{ route('jobs.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
