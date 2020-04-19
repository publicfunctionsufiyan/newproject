<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_Contact extends Model
{
    protected $fillable = [
        'hotel_id', 'address', 'country', 'city', 'state', 'phone', 'website'
    ];

    public function hotel()
    {
        return $this->hasOne('App\Hotel');
    }
}
