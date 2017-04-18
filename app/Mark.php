<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function mark()
    {
        return $this->belongsTo('App\Dictmark');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }


    public function semestr()
    {
        return $this->belongsTo('App\Semestr');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
    public function absence()
    {
        return $this->belongsToMany('App\Absence');
    }
}
