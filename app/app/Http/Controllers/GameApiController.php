<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use Auth;
use DB;

class GameApiController extends Controller
{	
	 public function game()
    {
		if (!Auth::guest()) {			
			return Game::all();
        } else {
			abort(403, 'Unauthorized action.');
        }
		
    }
}
