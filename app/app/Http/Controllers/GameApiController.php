<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\player;
use Auth;
use DB;

class GameApiController extends Controller
{	
	 public function game()
    {
		if (!Auth::guest()) {			
      /*$player = player::where('player_id',$user_id)->first();
            $now = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', now());
            $playerBD = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $player->birth_date.' 00:00:00');
            $player_age = $now->diffInYears($playerBD);*/
			return Game::all();
        } else {
			abort(403, 'Unauthorized action.');
        }
		
    }
}
