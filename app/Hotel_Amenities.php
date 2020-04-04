<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;


class Hotel_Amenities extends Pivot
{
    protected $table = 'hotel__amenities';

    protected $fillable = [
        'hotel_id', 'aminity_id'
    ];
    
    public $incrementing = true;


}
