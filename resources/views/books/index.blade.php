@extends('layouts.app')

@section('content')
    <style>
        .btn-view {
            background-color: #a19daa !important; /* Slightly lighter */
            border-color: #a19daa !important;
            color: #fff;
        }

        .btn-edit {
            background-color: #6e6a7a !important; /* Slightly darker */
            border-color: #6e6a7a !important;
            color: #fff;
        }

        .btn-delete {
            background-color: #886071 !important; /* Muted red/purple */
            border-color: #886071 !important;
            color: #fff;
        }

        .btn-add {
            background-color: #7c788b !important; /* The original color */
            border-color: #7c788b !important;
            color: #fff;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="mb-3">Books List</h3>

                <div class="card card-primary">
                    <div class="card-body">
                        <a href="{{ route('books.create', ['page' => $books->currentPage()]) }}" class="btn btn-add mb-3">Add New Book</a>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Edition</th>
                                    <th>Date Published</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $book->id }}</td>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->author_first_name }} {{ $book->author_last_name }}</td>
                                        <td>{{ $book->edition_number }}</td>
                                        <td>{{ \Carbon\Carbon::parse($book->date_published)->format('Y-m-d') }}</td>
                                        <td>
                                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-view">View</a>
                                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-edit">Edit</a>
                                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure do you want to Delete?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-center mt-4">
                            {{ $books->links('pagination::bootstrap-4') }} 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
