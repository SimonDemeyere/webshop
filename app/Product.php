<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'short_description', 'price', 'category_id', 'rating_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function photos() {
        $this->hasMany(Photo::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
