<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Hotel extends Model implements HasMedia
{
    use InteractsWithMedia;

    public $with = ['media'];


    protected $fillable = [
        'name', 'description', 'class', 'blocks', 'let', 'long'
    ];


    public function blocks()
    {
        return $this->hasMany('App\Block','hotel_id');
    }

    public function bookings()
    {
        return $this->hasMany('App\Booking','hotel_id');
    }

    public function rooms()
    {
        return $this->hasMany('App\Room','hotel_id');
    }

    public function amenities()
    {
        return $this->belongsToMany('App\Amenity')->using('App\Hotel_Amenities');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review','hotel_id');
    }

    public function contact()
    {
        return $this->hasOne('App\Hotel_Contact');
    }


}

