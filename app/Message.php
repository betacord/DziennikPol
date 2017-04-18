<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $fillable =
        [
            'title',
            'contents',
            'to_id',
            'from_id',
            'read'
        ];

    public function User()
    {
        return $this->belongsTo('App\User', 'to_id', 'id');
    }

    public function Teacher()
    {
        return $this->belongsTo('App\Teacher', 'from_id', 'id');
    }
}
