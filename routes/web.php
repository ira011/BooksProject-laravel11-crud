<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController; 
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\BorrowedBooksController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Auth::routes();
Route::resource('books', BookController::class);
Route::get('/borrowed-books', [BorrowedBooksController::class, 'index'])->name('borrowedBooks.index');
Route::get('/borrowed-books/{userId}', [BorrowedBooksController::class, 'index'])->name('borrowed.books');
Route::get('/borrowed-books/assign/{userId}/{bookId}', [BorrowedBooksController::class, 'assignBorrowedBook'])->name('borrowedBooks.assign');
Route::get('/borrowed-books', [BorrowedBooksController::class, 'index'])->name('borrowedBooks.index');
