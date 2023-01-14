<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Comment;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstwhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstwhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            'title' => 'All Posts' . $title,
            'active' => 'posts',
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(4)
                ->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'active' => 'posts',
            'post' => $post
        ]);
    }

    public function storeComment(Request $request, Post $post)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'body' => 'required|max:255'
        ]);

        Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'body' => $request->body,
            'post_id' => $post->id
        ]);

        return back();
    }
}
