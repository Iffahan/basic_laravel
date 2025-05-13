<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        $name = 'Iffahan Suksuwan';
        $date = '2025-05-13';
        return view('welcome', compact('name', 'date'));
    }

    function blogs()
    {
        $blogs = [
            [
                'title' => 'My First Blog',
                'content' => 'This is the content of my first blog post.',
                'author' => 'Iffahan Suksuwan',
                'date' => '2025-05-13',
            ],
            [
                'title' => 'My Second Blog',
                'content' => 'This is the content of my second blog post.',
                'author' => 'Iffahan Suksuwan',
                'date' => '2025-05-14',
            ],
            [
                'title' => 'My Third Blog',
                'content' => 'This is the content of my third blog post.',
                'author' => 'Iffahan Suksuwan',
                'date' => '2025-05-15',
            ],
            [
                'title' => 'My Fourth Blog',
                'content' => 'This is the content of my fourth blog post.',
                'author' => 'Iffahan Suksuwan',
                'date' => '2025-05-16',
            ],
            [
                'title' => 'My Fifth Blog',
                'content' => 'This is the content of my fifth blog post.',
                'author' => 'Iffahan Suksuwan',
                'date' => '2025-05-17',
            ],
        ];
        return view('blog', compact('blogs'));
    }
}
