<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';
    protected $fillable = [
        'user_id',
        'order_id',
        'image',
        'status',
        'prod_id',
        'qty',
        'harga',
        'total_harga'

    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function products()
    {
        return $this->belongsTo(Products::class, 'prod_id', 'id');
    }
}