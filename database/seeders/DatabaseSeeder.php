<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();



        User::create([
            'name' => 'surya',
            'username' => 'suryakun',
            'email' => 'tes@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Ujang',
        //     'email' => 'ujang@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'Programming'
        ]);

        Category::create([
            'name' => 'Hacker',
            'slug' => 'Hacker'
        ]);

        Category::create([
            'name' => 'Data',
            'slug' => 'Data'
        ]);

        Post::factory(20)->create();

        // Post::create([

        //     'title' => 'judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, quidem.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui temporibus quas eius repudiandae dignissimos a iure provident, totam distinctio quae neque debitis iusto eum aspernatur optio assumenda dolorem veniam nisi?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([

        //     'title' => 'judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, quidem.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui temporibus quas eius repudiandae dignissimos a iure provident, totam distinctio quae neque debitis iusto eum aspernatur optio assumenda dolorem veniam nisi?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, quidem.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui temporibus quas eius repudiandae dignissimos a iure provident, totam distinctio quae neque debitis iusto eum aspernatur optio assumenda dolorem veniam nisi?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, quidem.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui temporibus quas eius repudiandae dignissimos a iure provident, totam distinctio quae neque debitis iusto eum aspernatur optio assumenda dolorem veniam nisi?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
