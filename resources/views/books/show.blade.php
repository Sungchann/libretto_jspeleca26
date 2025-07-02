@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Book Details</h1>

    <div class="card mb-3">
        <div class="card-body">
            <h3 class="card-title">{{ $book->title }}</h3>
            <h5 class="card-subtitle mb-2 text-muted">Author: {{ $book->author->name }}</h5>
            
            <p>
                <strong>Genres:</strong>
                @foreach($book->genres as $genre)
                    <span class="badge bg-info">{{ $genre->name }}</span>
                @endforeach
            </p>

            <p><strong>Reviews:</strong></p>
            @if($book->reviews->count() > 0)
                <ul>
                    @foreach($book->reviews as $review)
                        <li>{{ $review->content }} - <em>Rating: {{ $review->rating }}/5</em></li>
                    @endforeach
                </ul>
            @else
                <p>No reviews yet.</p>
            @endif

            <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
