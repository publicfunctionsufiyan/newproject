<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\Models\Media;


class User extends Authenticatable implements HasMedia
{
    use Notifiable, HasApiTokens, HasRoles, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $with = ['media'];
    protected $fillable = [
        'fname', 'lname', 'email', 'password', 'user_type'
    ];

    protected $attributes = [
        'user_type' => 1,
     ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function bookings()
    {
        return $this->hasMany('App\Booking','user_id');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review','user_id');
    }

    public function contact()
    {
        return $this->hasOne('App\User_Contact');
    }
    
}
