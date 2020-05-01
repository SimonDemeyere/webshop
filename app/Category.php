<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $fillable = [
        'category', 'category_id'
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function childrenCategories()
    {
        return $this->hasMany(Category::class)->with('categories');
    }
    public function getChildById($categoryId = 0)
    {
//        return $this->hasMany(Category::class)->where('category_id', $categoryId)->get();
        return DB::select('SELECT * FROM categories WHERE category_id = :catId', ['catId' => $categoryId]);
    }
}
