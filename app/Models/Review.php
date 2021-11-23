<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'body',
        'products_id',
        'user_id'
    ];

    public function products()
    {
        return $this->belongsTo(Products::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}