<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name', 'address', 'rating', 'blocks'
    ];


    public function blocks()
    {
        return $this->hasMany('App\Block','hotel_id');
    }

    public function amenities()
    {
        return $this->belongsToMany('App\Amenity')->using('App\Hotel_Amenities');
    }
}

