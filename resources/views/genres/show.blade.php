@extends('layouts.app')

@section('title', 'Genre Details')

@section('content')
<div class="container">
    <h1>Genre: {{ $genre->name }}</h1>

    <h3>Books in this Genre:</h3>
    @if($genre->books->count())
        <ul>
            @foreach($genre->books as $book)
                <li>{{ $book->title }}</li>
            @endforeach
        </ul>
    @else
        <p>No books in this genre.</p>
    @endif

    <a href="{{ route('genres.edit', $genre) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('genres.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
