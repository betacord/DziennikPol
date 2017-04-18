<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Mark()
    {
        return $this->belongsToMany('App\Mark');
    }

    public function Absence()
    {
        return $this->belongsToMany('App\Absence');
    }

    public function Message()
    {
        return $this->belongsToMany('App\Message');
    }

    public function Event()
    {
        return $this->belongsToMany('App\Event');
    }
}
