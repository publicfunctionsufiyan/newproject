<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Booking extends Model
{
    protected $fillable = [
        'hotel_id', 'room_id', 'user_id', 'customer_name', 'from', 'to', 'capacity', 'rooms'
    ];

    public function user()
    {
    return $this->belongsTo('App\User', 'user_id');
    }

    public function hotel()
    {
    return $this->belongsTo('App\Hotel', 'hotel_id');
    }

}
