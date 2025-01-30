
<div class="d-flex justify-content-center">
    <div class="card card-secondary" style="width: 80%;">
        <div class="card-header">
            <h3 class="card-title">Book Details</h3>
        </div>

        <div class="card-body">
            <div class="row">
                <!-- First Column -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $book->title ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="author_first_name">Author First Name</label>
                        <input type="text" name="author_first_name" class="form-control" value="{{ old('author_first_name', $book->author_first_name ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="author_last_name">Author Last Name</label>
                        <input type="text" name="author_last_name" class="form-control" value="{{ old('author_last_name', $book->author_last_name ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="date_published">Date Published</label>
                        <input type="date" name="date_published" class="form-control" value="{{ old('date_published', $book->date_published ?? '') }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="synthesis">Synthesis</label>
                        <textarea name="synthesis" class="form-control" required>{{ old('synthesis', $book->synthesis ?? '') }}</textarea>
                    </div>
                </div>

                <!-- Second Column -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="isbn">ISBN</label>
                        <input type="text" name="isbn" class="form-control" value="{{ old('isbn', $book->isbn ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="edition_number">Edition Number</label>
                        <input type="number" name="edition_number" class="form-control" value="{{ old('edition_number', $book->edition_number ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="publisher">Publisher</label>
                        <input type="text" name="publisher" class="form-control" value="{{ old('publisher', $book->publisher ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="language">Language</label>
                        <input type="text" name="language" class="form-control" value="{{ old('language', $book->language ?? '') }}" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
