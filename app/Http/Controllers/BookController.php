<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(10);
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return a form view for creating a new book
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate and save a new book
        $request->validate([
            'title' => 'required|string|max:255',
            'author_first_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z]+$/'], // Only letters allowed
            'author_last_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z]+$/'], // Only letters allowed
            'date_published' => 'required|date',
            'synthesis' => 'required|string',
            'isbn' => 'required|numeric|digits_between:10,13|unique:books,isbn', // Ensure only numeric, 10-13 digits
            'edition_number' => 'required|integer',
            'publisher' => 'required|string|max:255',
            'language' => 'required|string|max:255',
        ]);

        Book::create($request->all());

        // Redirect back to the index page, maintaining the current page number
        return redirect()->route('books.index', ['page' => request()->query('page', 1)])
            ->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        // Show a specific book
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        // Return a form view for editing a book
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        // Validate and update a book
        $request->validate([
            'title' => 'required|string|max:255',
            'author_first_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z]+$/'], // Only letters allowed
            'author_last_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z]+$/'], // Only letters allowed
            'date_published' => 'required|date',
            'synthesis' => 'required|string',
            'isbn' => 'required|numeric|digits_between:10,13|unique:books,isbn,' . $book->id, // Ensure only numeric, 10-13 digits
            'edition_number' => 'required|integer',
            'publisher' => 'required|string|max:255',
            'language' => 'required|string|max:255',
        ]);

        $book->update($request->all());

        return redirect()
            ->route('books.index', ['page' => request()->query('page', 1)]) // Maintain current page
            ->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        // Delete a book
        $book->delete();

        return redirect()
            ->route('books.index', ['page' => request()->query('page', 1)]) // Maintain current page
            ->with('success', 'Book deleted successfully.');
    }
}
