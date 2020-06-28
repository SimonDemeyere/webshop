<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    private $fillable = [
        'user_id', 'payment_amount'
    ];

    public function user()
    {
        return $this->belongsTo('user');
    }
}
