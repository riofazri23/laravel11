<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all()
    {
        return [
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
            ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        if(!$post){
            abort(404);
        }
        return $post;
    }
} 

?>