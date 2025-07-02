@extends('layouts.app')

@section('title', 'Review Details')

@section('content')
<div class="container">
    <h1>Review for "{{ $review->book->title }}"</h1>

    <p><strong>Content:</strong> {{ $review->content }}</p>
    <p><strong>Rating:</strong> {{ $review->rating }}/5</p>

    <a href="{{ route('reviews.edit', $review) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
