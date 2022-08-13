<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentInfo extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'card_number',
      'expiration',
      'cvv'
    ];

//    protected $hidden = [
//        'card_number',
//        'cvv',
//    ];

    protected $casts = [
        'expiration' => 'date',
    ];

    // DEFINING RELATIONSHIP
    public function user () {
        return $this->belongsTo(User::class);
    }
}
