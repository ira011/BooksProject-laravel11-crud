<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BorrowedBook;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'title',
        'author_first_name',
        'author_last_name',
        'date_published',
        'synthesis',
        'isbn',
        'edition_number',
        'publisher',
        'language',
    ];

    public function borrowedBooks()
    {
        return $this->hasMany(BorrowedBook::class);
    }

    public function getAuthorFullNameAttribute()
    {
        return $this->author_first_name . ' ' . $this->author_last_name;
    }
}
