@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div style="width: 100%;">
                <h1 class="text-center mb-4">Add New Book</h1>

                @if ($errors->any())  <!-- Check if there are any validation errors -->
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)  <!-- Loop through the errors and display them -->
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('books.store') }}" method="POST">
                    @csrf
                    @include('books.book-form')  <!-- Include your form fields here -->

                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Create Book</button>
                        <a href="{{ route('books.index', ['page' => request()->query('page', 1)]) }}" class="btn btn-secondary">Back</a>  <!-- Back button -->
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
