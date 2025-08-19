 @extends('admin.master')

@section('content')
<div class="container">
    <h1>Add New City</h1>

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

    <form action="{{ route('cities.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>City Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter city name" value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label>Country ID</label>
            <input type="number" name="country_id" class="form-control" placeholder="Enter country ID" value="{{ old('country_id') }}">
        </div>

        <div class="mb-3">
            <label>State ID</label>
            <input type="number" name="state_id" class="form-control" placeholder="Enter state ID" value="{{ old('state_id') }}">
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Save City</button>
        <a href="{{ route('cities.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection 
 
