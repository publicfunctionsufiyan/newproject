<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Booking extends Model
{
    protected $fillable = [
        'hotel_id', 'room_id', 'user_id', 'customer_name', 'from', 'to', 'capacity', 'rooms'
    ];

    public function rooms()
    {
    return $this->belongsTo('App\Room', 'room_id');
    }

}
