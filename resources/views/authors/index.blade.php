@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Authors</h1>
    <a href="{{ route('authors.create') }}" class="btn btn-primary mb-3">Add Author</a>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        @foreach($authors as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->name }}</td>
            <td>
                <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
