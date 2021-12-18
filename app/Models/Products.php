<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable =
    [
        'kategori',
        'productname',
        'harga',
        'kuantitas',
        'deskripsi',
        'ulasan',
        'image',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    // public function datareviews()
    // {
    //     return $this->belongsTo(Review::class, 'id', 'id');
    // }
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    // public function addReview($body, $userid)
    // {
    //     $this->reviews()->create(['body' => $body, 'user_id' => $userid]);
    // }
}