<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sejarah;

class SejarahController extends Controller
{
    public function index()
    {
        return view('sejarah', [
            'title' => 'Sejarah',
            'content' => Sejarah::all()
        ]);
    }
}
