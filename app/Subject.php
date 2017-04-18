<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function Mark()
    {
        return $this->belongsToMany('App\Mark');
    }

    public function Absence()
    {
        return $this->belongsToMany('App\Absence');
    }

}
