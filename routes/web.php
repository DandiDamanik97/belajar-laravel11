<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

Route::get('/authors/{user:username}', function(User $user) {

    return view('posts', ['title' => count($user->posts) .  ' Articles by ' . $user->name , 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function(Category $category) {

    return view('posts', ['title' => ' Articles in: ' . $category->name , 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']); //diarahkan ke view
});


//buat 2 route baru
//1.buat halaman blog
//2. didalam blog ada 2 buah artikel, judul dan isi
//rute baru /contact
// ada isinya email dan sosial media