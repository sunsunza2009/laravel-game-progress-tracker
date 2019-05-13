<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\fav;

class FavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::guest()) {
            $user_id = Auth::user()->id;
			$fav_list = DB::select("SELECT g.game_id,g.name,g.rating,g.platform,g.detail,g.genre,g.developer,g.poster_url FROM favorite f JOIN games g WHERE f.game_id = g.game_id and f.player_id = ?",[$user_id]);			
            return $fav_list;

        } else {
			abort(403, 'Unauthorized action.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
		if (!Auth::guest()) {
			$user_id = Auth::user()->id;			
			$fav = new fav;
			$fav->player_id = $user_id;
			$fav->game_id = $id;
			$fav->save();
			return response()->json(['result' => 'True']);
        } else {
			return response()->json(['result' => 'False']);
        }
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
		if (!Auth::guest()) {
			$user_id = Auth::user()->id;
			$fav_list = fav::where('game_id', $id)->where('player_id', $user_id)->first();	
			fav::where('fav_id', $fav_list["fav_id"])->delete();
			return response()->json(['result' => 'True']);
        } else {
			return response()->json(['result' => 'False']);
        }
    }
}
