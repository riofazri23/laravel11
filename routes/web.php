<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home',['title'=>'Home Page']);
});

Route::get('/about', function(){
    return view('about',
        [
            'nama'=>'Rio Fazri',
            'title'=>'About',
        ]
    );
});

Route::get('/posts',function(){
    return view('posts',
        [
            'title'=>'Blog',
            'posts'=> Post::all()
        ]
    );
});

Route::get('/posts/{post:slug}',function(Post $post){
        return view('post',['title'=>'Single Post', 'post'=>$post]);
});

Route::get('/authors/{user}',function(User $user){
    return view('posts',['title'=>'Articles by '.$user->name, 'posts'=>$user->posts]);
});

Route::get('/contact',function(){
    return view('contact',
        [
            'nama'=>'Rio Fazri',
            'email'=>'riofazri23@gmail.com',
            'notelp'=>'0878 7537 0864',
            'domisili'=>'Jakarta Timur',
            'title'=>'Contact',

        ]
    );
});