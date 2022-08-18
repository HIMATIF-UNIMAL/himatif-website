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
        User::create([
            'name' => 'IPTEK GANTENG',
            'username' => 'iptek2022',
            'email' => 'iptek@unimal.ac.id',
            'password' => bcrypt('iptek2022')
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

        Post::factory(20)->create();

        Comment::factory(100)->create();
    }
}
