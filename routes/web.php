<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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

//Halaman Home
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

//Halaman About
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Aida Mahmudah",
        "email" => "aida.mahmudah171@gmail.com",
        "image" => "aida.jpg"
    ]);
});

//Halaman Post
Route::get('/post', [PostController::class, 'index']);

//Halaman Single Post
//tanpa :slug maka data yang diambil akna berdasarkan id pada tabel
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
