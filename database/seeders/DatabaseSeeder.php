<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {

        // Book::factory(20)->create();

        $this->call([
            BorrowedBooksSeeder::class,
        ]);

        
    }
}
