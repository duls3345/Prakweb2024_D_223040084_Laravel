<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all() ]);
});
Route::get('/posts/{slug}', function($slug) {
    $post = Post::find($slug);
        return view('post', ['title' => 'Single Post', 'post' => $post]);
});
Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});