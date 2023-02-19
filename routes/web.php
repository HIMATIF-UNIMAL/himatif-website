<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/sejarah', [SejarahController::class, 'index']);
Route::get('/divisi/{divisi}', [DivisiController::class, 'show']);

Route::controller(PostController::class)->group(function () {
    Route::get('/blog', 'index');
    Route::get('/blog/{post:slug}', 'show')->name('post');
    Route::post('/blog/{post:slug}/comments', 'storeComment');
});

Route::get('/galeri', [GaleryController::class, 'index']);
Route::get('/toko', [ProductController::class, 'index']);

// Route::get('/events', function () {
//     return view('events', [
//         'active' => 'events',
//         'title' => 'Events',
//     ]);
// });

// Route::get('/prestasi', function () {
//     return view('prestasi', [
//         'active' => 'prestasi',
//         'title' => 'Prestasi',
//     ]);
// });

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout')->middleware('auth');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::resource('/dashboard/posts', DashboardPostController::class);
    Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
});

Route::prefix('dashboard/categories')->middleware(['auth', 'admin'])->name('categories.')->group(function () {
    Route::get('checkSlug', [AdminCategoryController::class, 'checkSlug']);
    Route::resource('', AdminCategoryController::class)->except('show');
});

Route::resource('/dashboard/products', DashboardProductController::class)->middleware('auth');
