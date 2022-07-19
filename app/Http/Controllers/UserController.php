<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show(User $author)
    {
        return view('posts', [
            'title' => "Posts By : $author->name",
            'active' => 'posts',
            'posts' => $author->posts->load('category', 'author'),
        ]);
    }
}
