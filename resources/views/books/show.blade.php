@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card card-secondary" style="width: 80%;">
                <div class="card-header">
                    <h3 class="card-title">Book Details</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <td>{{ $book->id }}</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{ $book->title }}</td>
                            </tr>
                            <tr>
                                <th>Author</th>
                                <td>{{ $book->author_first_name }} {{ $book->author_last_name }}</td>
                            </tr>
                            <tr>
                                <th>Edition Number</th>
                                <td>{{ $book->edition_number }}</td>
                            </tr>
                            <tr>
                                <th>Date Published</th>
                                <td>{{ \Carbon\Carbon::parse($book->date_published)->format('Y-m-d') }}</td>
                            </tr>
                            <tr>
                                <th>Synthesis</th>
                                <td>{{ $book->synthesis }}</td>
                            </tr>
                            <tr>
                                <th>ISBN</th>
                                <td>{{ $book->isbn }}</td>
                            </tr>
                            <tr>
                                <th>Publisher</th>
                                <td>{{ $book->publisher }}</td>
                            </tr>
                            <tr>
                                <th>Language</th>
                                <td>{{ $book->language }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('books.index', ['page' => request()->query('page', 1)]) }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
