<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        return view('posts', [
            'title' => "Category : $category->name",
            'active' => 'posts',
            'posts' => $category->posts->load('category', 'author'),
        ]);
    }
}
