<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semestr extends Model
{
    public function Mark()
    {
        return $this->belongsToMany('App\Mark');
    }

    public function absence()
    {
        return $this->belongsToMany('App\Absence');
    }
}
