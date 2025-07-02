@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control"
                   value="{{ old('title', $book->title) }}" required>
        </div>

        <div class="mb-3">
            <label>Author</label>
            <select name="author_id" class="form-control" required>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}"
                        {{ $author->id == $book->author_id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Genres</label>
            @foreach($genres as $genre)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genres[]"
                           value="{{ $genre->id }}" id="genre{{ $genre->id }}"
                           {{ $book->genres->contains($genre->id) ? 'checked' : '' }}>
                    <label class="form-check-label" for="genre{{ $genre->id }}">
                        {{ $genre->name }}
                    </label>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
