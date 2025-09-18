<?php

use App\Models;
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['header' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Basuki Ridho', 'header' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['header' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    // $post = Post::find($id);

    return view('post', ['header' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['header' => 'Contact']);
});
