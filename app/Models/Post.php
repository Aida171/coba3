<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // coloum yang bisa diubah datanya 
    // protected $fillable = ['title', 'excerpt', 'content'];

    // coloum yang gak bisa diubah datanya 
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
