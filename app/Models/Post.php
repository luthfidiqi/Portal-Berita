<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
    private static $blog_posts = [
        [
            "tittle" => "Judul Blog Pertama",
            "slug" => "judul-blog-pertama",
            "author" => "Luthfi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, inventore? Expedita aliquid, quos dolore at voluptatum provident nulla quae laudantium deleniti eaque libero adipisci id deserunt alias eligendi illo minima."
            ],
        [
            "tittle" => "Judul Blog Kedua",
            "slug" => "judul-blog-kedua",
            "author" => "Luthfi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, inventore? Expedita aliquid, quos dolore at voluptatum provident nulla quae laudantium deleniti eaque libero adipisci id deserunt alias eligendi illo minima. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, inventore? Expedita aliquid, quos dolore at voluptatum provident nulla quae laudantium deleniti eaque libero adipisci id deserunt alias eligendi illo minima."
        ]
    ];

    Public static function all() 
    {
        return collect(self::$blog_posts);
    }

    Public static function find($slug) 
    {
        // $posts = self::$blog_posts;
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        // return $post;
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}

