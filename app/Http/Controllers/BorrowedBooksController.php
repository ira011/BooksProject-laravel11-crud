<?php

namespace App\Http\Controllers;

use App\Models\BorrowedBook;
use App\Models\User;
use App\Models\Book;
use Illuminate\Http\RedirectResponse;

class BorrowedBooksController extends Controller
{
    public function index()
    {
        $users = User::with(['borrowedBooks.book'])->get();
        return view('borrowed_books.index', compact('users'));
    }

    public function assignBorrowedBook($userId, $bookId): RedirectResponse
    {
        $user = User::findOrFail($userId);
        $book = Book::findOrFail($bookId);

        $borrowedBook = new BorrowedBook();
        $borrowedBook->user_id = $user->id;
        $borrowedBook->book_id = $book->id;
        $borrowedBook->date_borrowed = now();
        $borrowedBook->due_date = now()->addWeeks(2);
        $borrowedBook->status = 'borrowed';
        $borrowedBook->save();

        return redirect()->route('borrowedBooks.index', ['userId' => $user->id])->with('success', 'New borrowed book assigned.');
    }
}
