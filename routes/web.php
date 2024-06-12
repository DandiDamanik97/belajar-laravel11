<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about',['name' => 'Dandi Damanik', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts',['title' => 'Blog','posts' => Post::all()]); //diarahkan ke view
});

Route::get('/posts/{post:slug}', function(Post $post) {

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']); //diarahkan ke view
});


//buat 2 route baru
//1.buat halaman blog
//2. didalam blog ada 2 buah artikel, judul dan isi
//rute baru /contact
// ada isinya email dan sosial media