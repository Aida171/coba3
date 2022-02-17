<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        // data ditarik terlebih dahulu
        // $posts = self::$blog_posts;

        // looping b mengecek apakah slug sama dengan ang dipilih
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        //menampilkan post sesuai slug
        // return $post;

        //menggunakan collection 
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
