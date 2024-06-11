<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post 
{
    public static function all () 
    {
        return [
            [
                'id' => '1',
                'slug' => 'rantau-artikel-1',
                'title' => 'Rantau',
                'author' => 'Dandi Damanik',
                'body' => 'Setiap orang berhak memilih untuk jalan hidup masing-masing
                ada pribadi yang untuk tinggal di tanah kelahirannya
                dan membangun serta memajukan tanah kelahirannya
                dan ada pribadi yang memutuskan untuk Merantau,
                dengan tujuan mendapat hidup yang lebih baik'
            ],
            [
                'id' => '2',
                'slug' => 'proses-artikel-2',
                'title' => 'Proses',
                'author' => 'Dandi Damanik',
                'body' => 'Menikmati setiap proses yang ku jalani,
                berjuang dan berdoa selama proses perjalanan panjang.
                dan di 2020 aku menyeslesaikan Sarjana ku'
            ]
            ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) =>$post['slug'] == $slug);
        
        if(! $post) {
            abort(404);
        }
        return $post;
    }
}