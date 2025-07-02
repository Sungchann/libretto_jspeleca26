@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Author</label>
            <select name="author_id" class="form-control" required>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Genres</label>
            @foreach($genres as $genre)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genres[]"
                           value="{{ $genre->id }}" id="genre{{ $genre->id }}">
                    <label class="form-check-label" for="genre{{ $genre->id }}">
                        {{ $genre->name }}
                    </label>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
