<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'description',
        'price',
        'stock',
        'image'
    ];

    // DEFINING ONE TO MANY RELATIONSHIP
    public function orders () {
        return $this->hasMany(Orders::class);
    }
}
