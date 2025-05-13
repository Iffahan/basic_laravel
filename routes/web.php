<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;

Route::get('/', [AdminController::class, 'index'])->name('home');

Route::get('/blog', [AdminController::class, 'blogs'])->name('blog');
Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('blog.delete');

// Route for showing the "Create New Blog" form
Route::get('/create', [BlogController::class, 'create'])->name('blog.create');

// Route for storing the new blog post
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');