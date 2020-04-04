<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'room_id', 'customer_name'
    ];

    public function rooms()
    {
    return $this->belongsTo('App\Room', 'room_id');
    }

}
