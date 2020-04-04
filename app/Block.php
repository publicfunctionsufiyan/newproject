<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $fillable = [
        'hotel_id', 'name', 'floors'
    ];

    public function rooms()
    {
        return $this->hasMany('App\Room','block_id');
    }

    public function hotels()
    {
    return $this->belongsTo('App\Hotel', 'hotel_id');
    }
}
