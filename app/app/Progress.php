<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    public $timestamps = false;
    protected $table = "progress";
	
	protected $fillable = [
		'progress_id','player_id','chapter_id','game_id','comment','last_play_time'
	];
}
