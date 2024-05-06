<?php

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

Route::get('/blog',function(){
    return view('blog',
        [
            'title'=>'Blog'
        ]
    );
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