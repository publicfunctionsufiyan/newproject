<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'room_id', 'user_id', 'customer_name', 'from', 'to'
    ];

    public function rooms()
    {
    return $this->belongsTo('App\Room', 'room_id');
    }

}
