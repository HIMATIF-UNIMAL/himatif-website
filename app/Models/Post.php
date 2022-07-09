<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            'title' => "Blog Post 1",
            'slug' => "blog-post-1",
            "author" => "Bayu",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quidem, temporibus, atque, doloremque, officiis, in, libero, quae, dolore, vero, provident, possimus, quod!",
        ],
        [
            'title' => "Blog Post 2",
            'slug' => "blog-post-2",
            "author" => "Fajar",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quidem, temporibus, atque, doloremque, officiis, in, libero, quae, dolore, vero, provident, possimus, quod!",
        ],
        [
            'title' => "Blog Post 3",
            'slug' => "blog-post-3",
            "author" => "Akbar",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quidem, temporibus, atque, doloremque, officiis, in, libero, quae, dolore, vero, provident, possimus, quod!",
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
