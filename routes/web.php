<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\GenreController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('genres',GenreController::class);