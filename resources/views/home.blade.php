@extends('layouts.app') 

@section('content')
<div class="container">
    <h1>Welcome!</h1>
    <p></p>
    
    <div class="row">
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Feature 1</h5>
                    <p class="card-text">Description of feature 1.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Feature 2</h5>
                    <p class="card-text">Description of feature 2.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Feature 3</h5>
                    <p class="card-text">Description of feature 3.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('books.index') }}" class="btn btn-secondary">View All Books</a>
    </div>
</div>
@endsection
