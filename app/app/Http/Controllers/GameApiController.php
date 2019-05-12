<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use Auth;

class GameApiController extends Controller
{
    public function index()
    {
		if (!Auth::guest()) {
            return Game::all();

        } else {
			abort(403, 'Unauthorized action.');
        }
		
    }
}
