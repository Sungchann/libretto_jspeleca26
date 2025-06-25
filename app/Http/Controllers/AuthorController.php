<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        $request->validate(['name' => 'required']);
        Author::create($request->all());
        return redirect()->route('authors.index')->with('success', 'Author created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author): View
    {
        return view('authors.edit', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author): View    
    {
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author): RedirectResponse    
    {
        $request->validate(['name' => 'required']);
        $author->update($request->all());
        return redirect()->route('authors.index')->with('success', 'Author updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('authors.index')->with('success', 'Author deleted successfully.');

    }
}
