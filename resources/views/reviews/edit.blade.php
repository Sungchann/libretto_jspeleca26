@extends('layouts.app')

@section('title', 'Edit Review')

@section('content')
<div class="container">
    <h1>Edit Review</h1>
    <form action="{{ route('reviews.update', $review) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label for="book_id" class="form-label">Book</label>
            <select name="book_id" class="form-control" required>
                @foreach($books as $book)
                    <option value="{{ $book->id }}"
                        {{ $book->id == $review->book_id ? 'selected' : '' }}>
                        {{ $book->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="3" required>{{ old('content', $review->content) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating (1-5)</label>
            <input type="number" name="rating" class="form-control"
                   min="1" max="5" value="{{ old('rating', $review->rating) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
