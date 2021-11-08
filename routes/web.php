<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view(
        'home',
        [
            "title" => "Home"
        ]
    );
});

Route::get('/about', function () {
    return view(
        'about',
        [
            "title" => "About",
            "name" => "Rizky Nur",
            "email" => "rizky.nur@gmail.com",
            "image" => "rizky.jpg"
        ]
    );
});

Route::get('/blog', function () {
    $blog_posts = [
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
    return view(
        'blog',
        [
            "title" => "Blog",
            "posts" => $blog_posts
        ]
    );
});

Route::get(
    'posts/{slug}',
    function ($slug) {
        $blog_posts = [
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
        foreach ($blog_posts as $post) {
            if ($post['slug'] == $slug) {
                $single_post = $post;
            }
        }
        return view('post', [
            "title" => "Single Post",
            "post" => $single_post
        ]);
    }
);
