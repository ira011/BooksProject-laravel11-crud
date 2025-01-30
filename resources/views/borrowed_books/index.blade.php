@extends('layouts.app')

@section('content')
<div class="container" style="font-family: Arial, sans-serif; color: #333;">
    <h1 style="margin-bottom: 20px; font-size: 24px; border-bottom: 2px solid #007bff; padding-bottom: 10px;">Borrowed Books</h1>

    @if ($users->isEmpty())
        <p style="font-size: 16px; color: #777;">No users with borrowed books found.</p>
    @else
        @foreach ($users as $user)
            <div class="user-section" style="margin-bottom: 30px; padding: 15px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
                <h2 style="font-size: 20px; color: #0056b3; margin-bottom: 10px;">{{ $user->name }}</h2>

                @if ($user->borrowedBooks->isEmpty())
                    <p style="font-size: 14px; color: #999;">No borrowed books for this user.</p>
                @else
                    <table class="table table-sm" style="width: 100%; border-collapse: collapse; margin-top: 15px;">
                        <thead>
                            <tr style="background-color: #f1f1f1; text-align: left; border-bottom: 2px solid #ddd;">
                                <th style="padding: 10px;">Title</th>
                                <th style="padding: 10px;">Author</th>
                                <th style="padding: 10px;">Date Borrowed</th>
                                <th style="padding: 10px;">Due Date</th>
                                <th style="padding: 10px;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->borrowedBooks as $borrowedBook)
                                <tr style="border-bottom: 1px solid #eee;">
                                    <td style="padding: 10px;">{{ $borrowedBook->book->title }}</td>
                                    <td>{{ $borrowedBook->book->author_full_name ?? 'Unknown Author' }}</td>                                    <td style="padding: 10px;">{{ $borrowedBook->date_borrowed }}</td>
                                    <td style="padding: 10px;">{{ $borrowedBook->due_date }}</td>
                                    <td style="padding: 10px; color: {{ $borrowedBook->status === 'returned' ? '#28a745' : '#dc3545' }};">
                                        {{ ucfirst($borrowedBook->status) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        @endforeach
    @endif
</div>
@endsection
