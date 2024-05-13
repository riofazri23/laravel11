<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

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
            'title'=>'Post',
            'posts'=>[
                [
                    'id'=>1,
                    'slug'=>'judul-artikel-1',
                    'title'=>'Judul Artikel 1',
                    'author'=>'Rio Fazri',
                    'body'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto voluptas mollitia similique quis eaque impedit quisquam quaerat repudiandae eos saepe.'
                ],
                [
                    'id'=>2,
                    'slug'=>'judul-artikel-2',
                    'title'=>'Judul Artikel 2',
                    'author'=>'Rio Fazri',
                    'body'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure eaque autem possimus dolor ex beatae reprehenderit. Sint ducimus fugiat totam rerum. Minus voluptates deserunt dolore quisquam voluptatem, amet adipisci quaerat?'
                ]
            ]
        ]
    );
});

Route::get('/posts/{slug}',function($slug){
    $posts=[
            [
                'id'=>1,
                'title'=>'Judul Artikel 1',
                'slug'=>'judul-artikel-1',
                'author'=>'Rio Fazri',
                'body'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto voluptas mollitia similique quis eaque impedit quisquam quaerat repudiandae eos saepe.'
            ],
            [
                'id'=>2,
                'title'=>'Judul Artikel 2',
                'slug'=>'judul-artikel-2',
                'author'=>'Rio Fazri',
                'body'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure eaque autem possimus dolor ex beatae reprehenderit. Sint ducimus fugiat totam rerum. Minus voluptates deserunt dolore quisquam voluptatem, amet adipisci quaerat?'
            ]
        ];

        $post = Arr::first($posts, function($post) use ($slug) {
            return $post['slug'] == $slug;
        });

        return view('post',['title'=>'Single Post', 'post'=>$post]);
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