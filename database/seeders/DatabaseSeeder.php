<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        User::create([
            'name' => 'Rizky',
            'username' => 'rizky',
            'email' => 'rizky@gmail.com',
            'password' => bcrypt('password'),
        ]);
        // User::create([
        //     'name' => 'Alip',
        //     'email' => 'alip@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'First Title',
        //     'slug' => 'first-title',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus quam error reiciendis earum quos velit corrupti distinctio eius, optio suscipit, nostrum iusto harum eaque? Voluptate ex corrupti deserunt obcaecati mollitia!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Second Title',
        //     'slug' => 'second-title',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus quam error reiciendis earum quos velit corrupti distinctio eius, optio suscipit, nostrum iusto harum eaque? Voluptate ex corrupti deserunt obcaecati mollitia!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Third Title',
        //     'slug' => 'third-title',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus quam error reiciendis earum quos velit corrupti distinctio eius, optio suscipit, nostrum iusto harum eaque? Voluptate ex corrupti deserunt obcaecati mollitia!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
