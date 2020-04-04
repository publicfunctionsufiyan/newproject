<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'block_id', 'room_type_id', 'floor','price', 'availablity'
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
