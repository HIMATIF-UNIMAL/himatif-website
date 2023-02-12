<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'posts' => Post::latest()->where('user_id', auth()->user()->id)->get()

        ]);
    }
}
