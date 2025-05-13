@extends('layout')

@section('title', 'Create New Blog')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-3">Create New Blog</h1>
        <form method="POST" action="{{ route('blog.store') }}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="content" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" name="author" class="form-control" id="author" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Blog</button>
        </form>
    </div>
@endsection
