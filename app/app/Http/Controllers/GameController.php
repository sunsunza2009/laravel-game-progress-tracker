<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game = Game::all();
		return view('game.index',compact('game'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('game.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate(
		[
			'name' => 'required|max:10',
			'rating' => 'required',
			'platform' => 'required|max:100',
			'detail' => 'required|max:200',
			'genre' => 'required',
			'developer' => 'required',
			'poster_url' => 'required'
			
		]
		);
        $game = new Game;
		$game->name = $request->get('name');
		$game->rating = $request->get('rating');
		$game->platform = $request->get('platform');
		$game->detail = $request->get('detail');
		$game->genre = $request->get('genre');
		$game->developer = $request->get('developer');
		$game->poster_url = $request->get('poster_url');
		$game->save();
		return redirect('game');
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
        $game = Game::where('game_id', $id)->first();
		return view('game.edit',compact('game'));
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
        $request->validate(
		[
			'name' => 'required|max:10',
			'rating' => 'required',
			'platform' => 'required|max:100',
			'detail' => 'required|max:200',
			'genre' => 'required',
			'developer' => 'required'
		]
		);
		
        $game = Game::where('game_id', $id)->first();
		$game->name = $request->get('name');
		$game->rating = $request->get('rating');
		$game->platform = $request->get('platform');
		$game->detail = $request->get('detail');
		$game->genre = $request->get('genre');
		$game->developer = $request->get('developer');
		Game::where('game_id', $id)
		->update(['name' => $game->name,'rating' => $game->rating,'platform' => $game->platform,'detail' => $game->detail,'genre' => $game->genre,'developer' => $game->developer]);
		return redirect('game');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		Game::where('game_id', $id)->delete();
		return redirect('game');
    }
}
