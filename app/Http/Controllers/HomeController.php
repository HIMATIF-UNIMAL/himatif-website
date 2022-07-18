<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home',
            'divisi' => Divisi::find2(),
            'posts' => Post::latest()->get()
        ]);
    }
}
