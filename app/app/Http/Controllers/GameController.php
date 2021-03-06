<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Game;
use App\Chapters;
use App\Image;

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
		return view('admin.game.index',compact('game'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.game.create');
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
			'name' => 'required|max:99',
			'rating' => 'required',
			'age_limit' => 'required',
			'platform' => 'required|max:100',
			'detail' => 'required',
			'genre' => 'required',
			'developer' => 'required',
            'poster_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
		]
		);
        $game = new Game;
		$game->name = $request->get('name');
		$game->rating = $request->get('rating');
		$game->age_limit = $request->get('age_limit');
		$tmp_platform = $request->input('platform');
		$game->detail = $request->get('detail');
		$tmp_genre = $request->input('genre');
		$game->developer = $request->get('developer');
        //dd($game->poster_url);
        if ($request->file('poster_url') == null) {
            $game->poster_url = "";
        }else{ 
			$name= uniqid().$request->file('poster_url')->getClientOriginalName();
			$request->file('poster_url')->move(public_path().'/images/', $name);
			$game->poster_url = '/images/'.$name;
        }
		$game->platform = implode(",",$tmp_platform);
        $game->genre = implode(",",$tmp_genre);
        $game->save();
        $game = Game::where('name', $request->get('name'))->first();
        if ($request->file('image') != null) {
            for($i = 0;$i<count($request->file('image'));$i++){
                $image = new Image;
                $name= uniqid().$request->file('image')[$i]->getClientOriginalName();
			    $request->file('image')[$i]->move(public_path().'/images/', $name);
                $image->url = '/images/'.$name;
                $image->game_id = $game->game_id;
                $image->save();
            }
        }
		return redirect('admin/game');
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
        $image = Image::where('game_id', $id)->get();
        $game = Game::where('game_id', $id)->first();
		$tmp_platform = explode(',', $game->platform);
		$tmp_genre = explode(',', $game->genre);
		$game->platform = $tmp_platform;
		$game->genre = $tmp_genre;
		$platform = array("PC","PS1","PS2","PS3","PS4","XBOX One","XBOX 360","Nintendo Switch","Nintendo 3DS");
		$genre = array("RPG","Shooter","Action","Fighting","Adventure","Sports","Racing","Strategy","Mucsic&Rhythm","Puzzle","Board Games","Arcade","Unique");
		$checkplatform = array("","","","","","","","","");
		$checkgenre = array("","","","","","","","","","","","","");
		for($i=0;$i<count($game->platform);$i++){
			for($j=0;$j<count($platform);$j++){
				if($game->platform[$i]==$platform[$j]){
					$checkplatform[$j] = "checked";
				}
		}
		}
		
		for($i=0;$i<count($game->genre);$i++){
			for($j=0;$j<count($genre);$j++){
				if($game->genre[$i]==$genre[$j]){
					$checkgenre[$j] = "checked";
				}
		}
		}
		return view('admin.game.edit',compact('game','checkplatform','checkgenre','platform','genre','image'));
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
			'name' => 'required|max:99',
			'rating' => 'required',
			'age_limit' => 'required',
			'platform' => 'required|max:100',
			'detail' => 'required',
			'genre' => 'required',
			'developer' => 'required'
		]
        );
        $delImage=$request->get('delImage');
        $arr=explode(",",$delImage);
        for($i=0;$i<count($arr)-1;$i++){
            $tmpDel=Image::where('img_id', $arr[$i])->first();
            Image::where('img_id', $arr[$i])->delete();
        }
        if ($request->file('image') != null) {
            for($i = 0;$i<count($request->file('image'));$i++){
                $image = new Image;
                $name= uniqid().$request->file('image')[$i]->getClientOriginalName();
			    $request->file('image')[$i]->move(public_path().'/images/', $name);
                $image->url = '/images/'.$name;
                $image->game_id = $id;
                $image->save();
            }
        }
        $game = Game::where('game_id', $id)->first();
		$game->name = $request->get('name');
		$game->rating = $request->get('rating');
		$game->age_limit = $request->get('age_limit');
		$tmp_platform = $request->input('platform');
		$game->detail = $request->get('detail');
		$tmp_genre = $request->input('genre');
		$game->developer = $request->get('developer');
		$game->platform = implode(",",$tmp_platform);
        $game->genre = implode(",",$tmp_genre);
        if ($request->file('poster_url') != null) {
            $name= uniqid().$request->file('poster_url')->getClientOriginalName();
			$request->file('poster_url')->move(public_path().'/images/', $name);
			$game->poster_url = '/images/'.$name;
        }
		Game::where('game_id', $id)
		->update(['name' => $game->name,'rating' => $game->rating,'platform' => $game->platform,'detail' => $game->detail,'genre' => $game->genre,'developer' => $game->developer,'age_limit' => $game->age_limit,'poster_url' => $game->poster_url]);
		return redirect('admin/game');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Image::where('game_id', $id)->delete();
        Chapters::where('game_id', $id)->delete();
		Game::where('game_id', $id)->delete();
		return redirect('admin/game');
    }
	
	public function search(Request $request)
    {
        $input = $request->search;
        if ($input != ''){
            $game =  Game::where('name','LIKE','%'.$input.'%')->get();
        }else {
            $game = Game::all();
        }
		
        if ($game->count() > 0){
            return view('admin.game.index',compact('game'));
        }else {
            return back()->with('error','Not Found!');
        }
    }

}
