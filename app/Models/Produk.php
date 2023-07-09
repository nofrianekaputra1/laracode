<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'status',
        'title',
        'slug',
        'cover',
        'links',
        'mk',
        'md',
        'desc',
        'price',
        'discount',
    ];



    public function getTakeImageAttribute()
    {
        return "/storage/" . $this->cover;
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}