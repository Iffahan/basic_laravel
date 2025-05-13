@extends('layout')

@section('title', 'Blog Page')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-3">Blog</h1>
        <p class="lead">Welcome to the blog page! Here you can find the latest articles and updates.</p>

        <!-- Add "Create New Blog" Button -->
        <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3">Create New Blog</a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Date</th>
                        <th scope="col">Author</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $item)
                        <tr>
                            <td>{{ Str::limit($item->title, 30) }}</td>
                            <td>{{ Str::limit($item->content, 80) }}</td>
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->author }}</td>
                            <td>
                                <a href="{{ route('blog.delete', $item->id) }}" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
