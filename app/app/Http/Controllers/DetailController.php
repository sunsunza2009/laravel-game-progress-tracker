<?php

namespace App\Http\Controllers;
use App\Game;
use App\Chapters;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\player;
use Auth;
use App\fav;
use App\Progress;
use App\Image;
use DB;

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
        $request->validate(
            [
                'game_id' => 'required',
                'player_id' => 'required',
                'chapter_id' => 'required'
            ]
            );
            $user_id = Auth::user()->id;
            $checkChapter = Chapters::where('game_id', $request->get('game_id'))->where('chapter_id', $request->get('chapter_id'))->first();
            if($user_id == $request->get('player_id') && $checkChapter != null){
            $progress = new Progress;
            $progress->player_id = $request->get('player_id');
            $progress->game_id = $request->get('game_id');
            $progress->chapter_id = $request->get('chapter_id');
            $progress->comment = $request->get('comment');
            $progress->last_play_time = now();
            $x=1;
            $chapter = Chapters::where('game_id', $request->get('game_id'))->get();
            foreach ($chapter as $c) {
                if($c->chapter_id == $progress->chapter_id){
                    break;
                }
                $x++;
            }
            $progress->save();
            return redirect('detail/'.$request->get('game_id'));
        }
		return redirect('detail/'.$request->get('game_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {       $otherPic = Image::where('game_id', $id)->get();
            $first=$otherPic->last()->url;
            //$otherPic = Image::where('game_id', $id)->pluck('url')->toArray();
            $user_id = Auth::user()->id;
            $check = fav::where('game_id', $id)->where('player_id', $user_id)->get();
            $isFav = count($check);	
            $player = player::where('player_id',$user_id)->first();
            $now = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', now());
            $playerBD = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $player->birth_date.' 00:00:00');
            $player_age = $now->diffInYears($playerBD);
        $gamedetail = Game::where('game_id', $id)->first();        
        $chapterdetail = DB::select("SELECT c.* FROM chapters c LEFT OUTER JOIN progress p ON p.chapter_id = c.chapter_id AND p.player_id = ? WHERE p.chapter_id is NULL AND c.game_id = ?",[$user_id,$id]);
        $chapterdetail1 = Chapters::where('game_id', $id)->get();
        $progress = Progress::where('game_id', $id)->where('player_id', $user_id)->get();
        $lastProg= round(((count($chapterdetail1)-count($chapterdetail))/count($chapterdetail1))*100, 0);
        foreach ($progress as $p) {
            foreach ($chapterdetail1 as $c) {
                if($p->chapter_id == $c->chapter_id){
                    $p->chapter_id = $c->name;
                }
            }
        }
        //dd($player_age." ".$gamedetail->age_limit);
        if($player_age >= $gamedetail->age_limit){
            //dd($player_age);
			return view('detail',compact('gamedetail','chapterdetail','isFav','user_id','progress','otherPic','first','lastProg'));
        }else{
			$status = 'You\'re too young to view this content.';
            return view('detail',compact('gamedetail','chapterdetail','isFav','user_id','progress','status','otherPic','first','lastProg'));
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
        $progress = Progress::where('progress_id', $id)->first();
        $gid = $progress->game_id;
        Progress::where('progress_id', $id)->delete();
        return redirect('detail/'.$gid);
    }
}
