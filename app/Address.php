<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'street', 'house_number', 'postcode', 'city', 'country_id'
    ];

    public static function findOrFail($address_id)
    {
    }

    public function country() {
        return $this->belongsTo('App\Country');
    }
}
