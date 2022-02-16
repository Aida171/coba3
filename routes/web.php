<?php

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

//Halaman Blog
Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Framework Laravel",
            "slug" => "framework-laravel",
            "author" => "Duniailkom",
            "body" => "Laravel merupakan framework PHP paling populer saat ini, setidaknya itulah yang hasil dari Google Trends. 
            Salah satu faktor yang membuat perkembangan Laravel sedemikian pesat adalah selalu update dengan kebutuhan programmer."
        ],
        [
            "title" => "Git dan GitHub",
            "slug" => "git-dan-github",
            "author" => "diCoding",
            "body" => "Seiring berjalannya waktu, setiap pekerjaan manusia selalu mengalami pembaharuan untuk lebih efisien. 
            Tujuannya tidak lain adalah menyederhanakan prosedur pekerjaan yang cenderung berbelit-belit. 
            Begitupun dengan programmer dalam menyusun kode script yang rumit dan panjang membutuhkan kerja tim. 
            Seperti halnya Git dan GitHub muncul untuk membantu pekerjaan tim programmer dalam menyusun kode script."
        ]
    ];
    return view('blog', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

//Halaman Single Post
Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Framework Laravel",
            "slug" => "framework-laravel",
            "author" => "Duniailkom",
            "body" => "Laravel merupakan framework PHP paling populer saat ini, setidaknya itulah yang hasil dari Google Trends. 
            Salah satu faktor yang membuat perkembangan Laravel sedemikian pesat adalah selalu update dengan kebutuhan programmer."
        ],
        [
            "title" => "Git dan GitHub",
            "slug" => "git-dan-github",
            "author" => "diCoding",
            "body" => "Seiring berjalannya waktu, setiap pekerjaan manusia selalu mengalami pembaharuan untuk lebih efisien. 
            Tujuannya tidak lain adalah menyederhanakan prosedur pekerjaan yang cenderung berbelit-belit. 
            Begitupun dengan programmer dalam menyusun kode script yang rumit dan panjang membutuhkan kerja tim. 
            Seperti halnya Git dan GitHub muncul untuk membantu pekerjaan tim programmer dalam menyusun kode script."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('posts', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
