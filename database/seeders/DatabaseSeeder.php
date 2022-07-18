<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'Khairul Aqram',
            'email' => 'khairulaqram21@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        Category::create([
            'name' => 'Pelatihan',
            'slug' => 'pelatihan',
        ]);

        Category::create([
            'name' => 'Webinar',
            'slug' => 'webinar',
        ]);

        Category::create([
            'name' => 'Acara',
            'slug' => 'acara',
        ]);

        Post::create([
            'title' => 'Pelatihan Webinar',
            'slug' => 'pelatihan-webinar',
            'excerpt' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'body' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
            'category_id' => 1,
            'user_id' => 1,
        ]);
        Post::create([
            'title' => 'Judul kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'body' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
            'category_id' => 1,
            'user_id' => 2,
        ]);

        Post::create([
            'title' => 'Pelatihan Ketiga',
            'slug' => 'pelatihan-ketiga',
            'excerpt' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'body' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
            'category_id' => 3,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Pelatihan Keempat',
            'slug' => 'pelatihan-keempat',
            'excerpt' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'body' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
            'category_id' => 2,
            'user_id' => 2,
        ]);

        Comment::create([
            'name' => 'Pak Rektor',
            'post_id' => 1,
            'email' => 'rektor@gmail.com',
            'body' => 'waw sangat keren',
        ]);
        Comment::create([
            'name' => 'Pak Rektor',
            'post_id' => 1,
            'email' => 'rektor@gmail.com',
            'body' => 'waw sangat keren',
        ]);
        Comment::create([
            'name' => 'Pak Rektor',
            'post_id' => 2,
            'email' => 'rektor@gmail.com',
            'body' => 'waw sangat keren',
        ]);
        Comment::create([
            'name' => 'Pak Rektor',
            'post_id' => 3,
            'email' => 'rektor@gmail.com',
            'body' => 'waw sangat keren',
        ]);
        Comment::create([
            'name' => 'Pak Rektor',
            'post_id' => 2,
            'email' => 'rektor@gmail.com',
            'body' => 'waw sangat keren',
        ]);
    }
}
