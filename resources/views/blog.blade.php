{{-- resources/views/blog.blade.php --}}

@extends('layout') {{-- or 'layouts.app' if your layout file is layouts/app.blade.php --}}

@section('title', 'Blog Page')

@section('content')
    <h1>Blog</h1>
    <p>Welcome to the blog page!</p>
    <p>Here you can find the latest articles and updates.</p>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">title</th>
                <th scope="col">content</th>
                <th scope="col">date</th>
                <th scope="col">author</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
                <tr>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['content'] }}</td>
                    <td>{{ $item['date'] }}</td>
                    <td>{{ $item['author'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
