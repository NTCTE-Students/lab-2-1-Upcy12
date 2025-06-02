<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
// Route::get('/posts/index', [PostController::class, 'delete'])->name('posts.delete');
Route::get('/posts/{post}', [PostController::class, 'delete'])->name('post.delete');
Route::post('/posts/edit', [PostController::class, 'update'])->name('posts.update');
Route::get('/posts/show_post/{post}',[PostController::class, 'show_post'])->name('post.show');