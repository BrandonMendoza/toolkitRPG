<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    public $table = "Heros";

    protected $fillable = ['name', 'last_name', 'level', 'race_id', 'class_id','weapon_id', 'strength', 'intelligence', 'dexterity'];


    public function race(){
        return $this->belongsTo('App\Race');
    }

    public function class(){
        return $this->belongsTo('App\Chuman');
    }

    public function weapon(){
        return $this->belongsTo('App\Weapon');
    }
}
