<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fav extends Model
{
    public $timestamps = false;
    protected $table = "favorite";
	
	protected $fillable = [
		'player_id','game_id'
	];
}
