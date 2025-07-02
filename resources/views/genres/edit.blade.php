@extends('layouts.app')

@section('title', 'Edit Genre')

@section('content')
<div class="container">
    <h1>Edit Genre</h1>
    <form action="{{ route('genres.update', $genre) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Genre Name</label>
            <input type="text" class="form-control" name="name"
                   value="{{ old('name', $genre->name) }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('genres.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
