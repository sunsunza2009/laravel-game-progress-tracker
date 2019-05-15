<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $timestamps = false;
	protected $table = "image";
	protected $fillable = [
		'img_id','url','game_id'
	];
}
