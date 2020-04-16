<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'user_id', 'hotel_id', 'title', 'review', 'travel_date', 'own_experience'
    ];


    public function hotels()
    {
    return $this->belongsTo('App\Hotel', 'hotel_id');
    }

    public function users()
    {
    return $this->belongsTo('App\User', 'user_id');
    }
}
