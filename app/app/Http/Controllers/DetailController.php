<?php

namespace App\Http\Controllers;
use App\Game;
use App\Chapters;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\player;
use Auth;
use App\fav;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {       
            $user_id = Auth::user()->id;
            $check = fav::where('game_id', $id)->where('player_id', $user_id)->get();
            $isFav = count($check);	
            $player = player::where('player_id',$user_id)->first();
            $now = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', now());
            $playerBD = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $player->birth_date.' 00:00:00');
            $player_age = $now->diffInYears($playerBD);
        $gamedetail = Game::where('game_id', $id)->first();
        $chapterdetail = Chapters::where('game_id', $id)->get();
        //dd($player_age." ".$gamedetail->age_limit);
        if($player_age >= $gamedetail->age_limit){
            //dd($player_age);
			return view('detail',compact('gamedetail','chapterdetail','isFav'));
        }else{
			$status = 'You\'re too young to view this content.';
            return view('detail',compact('gamedetail','chapterdetail','status','isFav'));
        }
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
        //
    }
}
