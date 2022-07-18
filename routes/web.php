<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SejarahController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Sejarah;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DivisiController::class, 'index']);
Route::get('/sejarah', [SejarahController::class, 'index']);
Route::get('/divisi/{divisi}', [DivisiController::class, 'show']);
Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

Route::get('/toko', function () {
    return view('toko', [
        'title' => 'Toko',
        ''
    ]);
});

Route::get('/events', function () {
    return view('events', [
        'title' => 'Events',
    ]);
});

Route::get('/prestasi', function () {
    return view('prestasi', [
        'title' => 'Prestasi',
    ]);
});

Route::get('/galeri', function () {
    return view('galeri', [
        'title' => 'Galeri',
    ]);
});
