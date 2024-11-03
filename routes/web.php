<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Abdul Aziz',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime cum dolorem dolores expedita suscipit non at? Placeat, est maiores ullam possimus autem perferendis obcaecati quae, aspernatur ipsam harum hic quibusdam!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Abdul Aziz',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita modi quidem consectetur suscipit facere vero voluptas aut, praesentium quo optio, ratione dolor, officia numquam aspernatur odio rem perferendis sed autem!'
        ]
    ] ]);
});
Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Abdul Aziz',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime cum dolorem dolores expedita suscipit non at? Placeat, est maiores ullam possimus autem perferendis obcaecati quae, aspernatur ipsam harum hic quibusdam!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Abdul Aziz',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita modi quidem consectetur suscipit facere vero voluptas aut, praesentium quo optio, ratione dolor, officia numquam aspernatur odio rem perferendis sed autem!'
        ]
        ];
        $post = Arr::first($posts, function($post) use ($slug) {
            return $post['slug'] == $slug;
        });
        return view('post', ['title' => 'Single Post', 'post' => $post]);
});
Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});