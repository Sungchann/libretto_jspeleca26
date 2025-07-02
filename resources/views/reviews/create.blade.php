@extends('layouts.app')

@section('title', 'Add Review')

@section('content')
<div class="container">
    <h1>Add Review</h1>
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="book_id" class="form-label">Book</label>
            <select name="book_id" class="form-control" required>
                <option value="">Select Book</option>
                @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating (1-5)</label>
            <input type="number" name="rating" class="form-control" min="1" max="5" required>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
