@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Author</h1>

    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button class="btn btn-success">Save</button>
        <a href="{{ route('authors.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
