<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;

class DivisiController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home',
            'divisi' => Divisi::find2()
        ]);
    }

    public function show($divisi)
    {
        return view('divisi', [
            'title' => 'Divisi',
            'nama_divisi' => $divisi,
            'divisi' => Divisi::find($divisi)
        ]);
    }
}
