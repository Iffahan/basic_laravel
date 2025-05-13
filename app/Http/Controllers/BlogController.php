<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    // Show the form to create a new blog
    public function create()
    {
        return view('create');
    }

    // Store a new blog
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string',
        ]);

        // Create a new blog
        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
            'date' => now(),
        ]);

        return redirect()->route('blog')->with('success', 'Blog created successfully!');
    }
}
