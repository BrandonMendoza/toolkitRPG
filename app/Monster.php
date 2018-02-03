<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    public function race(){
        return $this->belongsTo('App\Race');
    }
}
