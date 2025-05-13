{{-- resources/views/blog.blade.php --}}

@extends('layout') {{-- or 'layouts.app' if your layout file is layouts/app.blade.php --}}

@section('title', 'Blog Page')

@section('content')
    <h1>Blog</h1>
    <p>Welcome to the blog page!</p>
    <p>Here you can find the latest articles and updates.</p>
    <ul>
        @foreach($blogs as $item)
            <li>
                <h2>{{ $item['title'] }}</h2>
                <p>{{ $item['content'] }}</p>
                <p><strong>Published on:</strong> {{ $item['date'] }}</p>
                <p><strong>Author:</strong> {{ $item['author'] }}</p>
            </li>
        @endforeach
    </ul>
@endsection
