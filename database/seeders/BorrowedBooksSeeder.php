<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BorrowedBook;
use App\Models\User;
use App\Models\Book;

class BorrowedBooksSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $books = Book::all();

        foreach ($users as $user) {
            $borrowedBooks = $books->random(2);

            foreach ($borrowedBooks as $book) {
                BorrowedBook::create([
                    'user_id' => $user->id,
                    'book_id' => $book->id,
                    'date_borrowed' => now(),
                    'due_date' => now()->addWeeks(2),
                    'status' => 'borrowed',
                ]);
            }
        }
    }
}
