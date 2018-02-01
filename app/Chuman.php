<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chuman extends Model
{
    public $table = "chumans";

    protected $fillable = [
    	'id',
    	'name'
	];
}
