<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'bill',
        'isActive'
    ];
    // DEFINING RELATIONSHIP WITH USER MODEL
    public function user () {
        return $this->belongsTo(User::class);
    }

    public function product () {
        return $this->belongsTo(Products::class);
    }
}
