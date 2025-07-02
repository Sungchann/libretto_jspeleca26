<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Book;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::with('book')->get();
        return view('reviews.index', compact('reviews'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Book::all();
        return view('reviews.create', compact('books'));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReviewRequest $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Review::create($request->only('book_id', 'content', 'rating'));

        return redirect()->route('reviews.index')->with('success', 'Review added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        $review->load('book');
        return view('reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        $books = Book::all();
        return view('reviews.edit', compact('review', 'books'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $review->update($request->only('book_id', 'content', 'rating'));

        return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
    }
}
