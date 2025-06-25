@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Author</h1>

    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" value="{{ $author->name }}" class="form-control" required>
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('authors.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
