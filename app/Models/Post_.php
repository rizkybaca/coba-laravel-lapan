<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    // use HasFactory;
    private static $blog_posts = [
        [
            "title" => "Judul First Post",
            "slug" => "judul-first-post",
            "author" => "Rizky Nur",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda rerum iste ex maiores nihil labore, minima sint atque alias impedit quasi asperiores perspiciatis optio, voluptatibus delectus voluptatum distinctio? Ipsa corrupti sed illo eligendi nesciunt, repellat commodi iure eum sequi voluptate deserunt quae, eaque corporis officiis porro culpa debitis placeat, repellendus animi dolorem ratione omnis ea nam cumque. Vitae cupiditate libero repellat temporibus voluptatem dolorem quas similique facere perspiciatis distinctio, enim itaque rerum veniam pariatur dolores praesentium odio qui autem molestiae."
        ],
        [
            "title" => "Judul Second Post",
            "slug" => "judul-second-post",
            "author" => "Nur Rizky",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda rerum iste ex maiores nihil labore, minima sint atque alias impedit quasi asperiores perspiciatis optio, voluptatibus delectus voluptatum distinctio? Ipsa corrupti sed illo eligendi nesciunt, repellat commodi iure eum sequi voluptate deserunt quae, eaque corporis officiis porro culpa debitis placeat, repellendus animi dolorem ratione omnis ea nam cumque. Vitae cupiditate libero repellat temporibus voluptatem dolorem quas similique facere perspiciatis distinctio, enim itaque rerum veniam pariatur dolores praesentium odio qui autem molestiae."
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
