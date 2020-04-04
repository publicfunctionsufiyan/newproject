<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_Type extends Model
{
    protected $fillable = [
        'name', 'size', 'beds'
    ];

    public function rooms()
    {
        return $this->hasMany('App\Room','room_type_id');
    }
    
}
