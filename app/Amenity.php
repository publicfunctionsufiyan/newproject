<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    protected $fillable = [
        'name'
    ];

    public function hotels()
    {
        return $this->belongsToMany('App\Hotel')->using('App\Hotel_Amenities');
    }
}
