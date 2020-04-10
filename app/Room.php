<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Room extends Model implements HasMedia
{
    use InteractsWithMedia;
    public $with = ['media'];

    protected $fillable = [
        'hotel_id', 'block_id', 'type', 'size', 'beds', 'floor','price', 'availablity'
    ];

    public function bookings()
    {
        return $this->hasOne('App\Booking','room_id');
    }

    public function room_types()
    {
    return $this->belongsTo('App\Room_Type', 'room_type_id');
    }

    public function blocks()
    {
    return $this->belongsTo('App\Block', 'block_id');
    }
    
}
