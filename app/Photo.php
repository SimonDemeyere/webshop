<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $uploads = '/assets/images/';

    protected $fillable = [
        'src', 'product_id'
    ];

    public function getFileAttribute($photo) {
        return $this->uploads . $photo;
    }
    public function product() {
        return $this->belongsTo('App\Product');
    }
}
