<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dictmark extends Model
{
    public function Mark()
    {
        return $this->belongsToMany('App\Mark');
    }
}
