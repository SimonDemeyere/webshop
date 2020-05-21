<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'short_description', 'price', 'category_id', 'photo_id'
    ];

    public function category() {
        $this->hasMany('App\Category');
    }
    public function photos() {
        $this->hasMany('App\Photo');
    }
}
