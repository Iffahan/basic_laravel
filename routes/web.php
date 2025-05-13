<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', [AdminController::class, 'index'])->name('home');

Route::get('/blog', [AdminController::class, 'blogs'])->name('blog');
