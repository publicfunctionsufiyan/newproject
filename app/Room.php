<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Room extends Model implements HasMedia
{
    use InteractsWithMedia;
    public $with = ['media'];

    protected $fillable = [
        'hotel_id', 'block_id', 'type', 'description', 'size', 'beds', 'floor','price', 'availablity'
    ];

    public function hotels()
    {
    return $this->belongsTo('App\Hotel', 'hotel_id');
    }


    public function blocks()
    {
    return $this->belongsTo('App\Block', 'block_id');
    }
    
}
