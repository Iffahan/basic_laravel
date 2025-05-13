<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'My Website')</title>

    <!-- ✅ Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            padding: 1rem;
        }

        nav a {
            color: white;
            margin-right: 1rem;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            padding: 2rem;
        }
    </style>
</head>

<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('blog') }}">Blog</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
