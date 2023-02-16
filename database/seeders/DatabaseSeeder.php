<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'IPTEK HIMATIF',
            'username' => 'iptek2022',
            'email' => 'iptek@unimal.ac.id',
            'password' => bcrypt('iptek2022'),
            'is_admin' => '1',
        ]);

        User::factory(5)->create();

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

        Category::create([
            'name' => 'Seminar',
            'slug' => 'seminar',
        ]);
        Category::factory(5)->create();

        Post::factory(20)->create();
        Product::factory(10)->create();

        Comment::factory(100)->create();
    }
}
