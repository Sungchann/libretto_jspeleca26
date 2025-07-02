@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container text-center">
    <h1 class="mb-4">Welcome to <strong>SHEESHER</strong></h1>

    <div class="row justify-content-center">
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow">
                <div class="card-body d-flex flex-column justify-content-center">
                    <h4 class="card-title mb-3">Authors</h4>
                    <p class="card-text">Manage all authors.</p>
                    <a href="{{ route('authors.index') }}" class="btn btn-primary mt-auto">Go to Authors</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow">
                <div class="card-body d-flex flex-column justify-content-center">
                    <h4 class="card-title mb-3">Books</h4>
                    <p class="card-text">Browse and manage books.</p>
                    <a href="{{ route('books.index') }}" class="btn btn-primary mt-auto">Go to Books</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow">
                <div class="card-body d-flex flex-column justify-content-center">
                    <h4 class="card-title mb-3">Genres</h4>
                    <p class="card-text">Manage book genres.</p>
                    <a href="{{ route('genres.index') }}" class="btn btn-primary mt-auto">Go to Genres</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow">
                <div class="card-body d-flex flex-column justify-content-center">
                    <h4 class="card-title mb-3">Reviews</h4>
                    <p class="card-text">Check and manage reviews.</p>
                    <a href="{{ route('reviews.index') }}" class="btn btn-primary mt-auto">Go to Reviews</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
