@extends('layouts.app')

@section('title', 'Reviews')

@section('content')
<div class="container">
    <h1>Reviews</h1>
    <a href="{{ route('reviews.create') }}" class="btn btn-primary mb-3">Add Review</a>

    @if($reviews->count())
        <table class="table">
            <thead>
                <tr>
                    <th>Book</th>
                    <th>Content</th>
                    <th>Rating</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($reviews as $review)
                <tr>
                    <td>{{ $review->book->title }}</td>
                    <td>{{ $review->content }}</td>
                    <td>{{ $review->rating }}/5</td>
                    <td>
                        <a href="{{ route('reviews.show', $review) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('reviews.edit', $review) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('reviews.destroy', $review) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No reviews yet.</p>
    @endif
</div>
@endsection
