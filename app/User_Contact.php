<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Contact extends Model
{
    protected $fillable = [
        'user_id', 'address', 'country', 'city', 'state', 'postalcode', 'phone'
    ];
}
