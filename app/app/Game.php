<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
	public $timestamps = false;
    protected $table = "games";
	
	protected $fillable = [
		'name','rating','platform','detail','genre','developer','poster_url'
	];
}
