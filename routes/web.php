<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function(){
    return view('about',['nama'=>'Rio Fazri']);
});

Route::get('/blog',function(){
    return view('blog');
});

Route::get('/contact',function(){
    return view('contact',
        [
            'nama'=>'Rio Fazri',
            'email'=>'riofazri23@gmail.com',
            'notelp'=>'0878 7537 0864',
            'domisili'=>'Jakarta Timur'

        ]
    );
});