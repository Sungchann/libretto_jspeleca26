@extends('layouts.app')

@section('title', 'Add Genre')

@section('content')
<div class="container">
    <h1>Add Genre</h1>
    <form action="{{ route('genres.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Genre Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('genres.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
