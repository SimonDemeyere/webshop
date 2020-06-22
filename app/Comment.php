<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'title', 'message', 'user_id', 'product_id', 'rating_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }

    /*public function rating() {
        return $this->belongsTo(Rating::class);
    }*/
}
