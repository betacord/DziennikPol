<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Mark()
    {
        return $this->belongsToMany('App\Mark');
    }
}
