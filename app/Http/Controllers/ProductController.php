<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('toko', [
            'title' => 'Toko',
            'products' => Product::latest()->get()
        ]);
    }
}
