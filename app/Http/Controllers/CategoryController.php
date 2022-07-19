<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        return view('posts', [
            'title' => "Kategory : $category->name",
            'active' => 'posts',
            'posts' => $category->posts->load('category', 'author'),
        ]);
    }
}
