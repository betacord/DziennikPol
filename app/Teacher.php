<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function Message()
    {
        return $this->belongsToMany('App\Message');
    }
}
