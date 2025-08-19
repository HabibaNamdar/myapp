@extends('admin.master')

@section('content')
<div class="container">
    <h1>Edit Role</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('roles.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $role->name }}">
        </div>
        <div class="mb-3">
            <label>Display Name</label>
            <input type="text" name="display_name" class="form-control" value="{{ $role->display_name }}">
        </div>
        <div class="mb-3">
            <label>Description</label>
            <input type="text" name="description" class="form-control" value="{{ $role->description }}">
        </div>

        <button type="submit" class="btn btn-success">Update Role</button>
        <a href="{{ route('roles.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
