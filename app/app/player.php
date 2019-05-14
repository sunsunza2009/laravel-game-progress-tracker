<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    protected $table = "players";
	
	protected $fillable = [
		'player_id','name','gender','birth_date','email'
	];
}
