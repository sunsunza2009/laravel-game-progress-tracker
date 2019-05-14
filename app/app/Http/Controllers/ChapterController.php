<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapters;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        if($request->get('method_add') == 'text'){
        $request->validate(
		[
            'name' => 'required',
            'game_id' => 'required'
		]
		);
		
		$chapters = new Chapters;
		$chapters->name = $request->get('name');
		$chapters->game_id = $request->get('game_id');
		$chapters->save();
        //return redirect('admin.chapters.show',$request->get('game_id'));
        return redirect()->action(
            'ChapterController@show', ['id' => $request->get('game_id')]
        );
        }
        else if($request->get('method_add') == 'file'){
            if (!$request->hasFile('chapters_file')) {
                dd("y");
            }
            else{
                $cfile = $request->file('chapters_file');
                $x=0;
                foreach(file($cfile) as $line) {
                    $x++;
                    $chapters = new Chapters;
		            $chapters->name = $line;
		            $chapters->game_id = $request->get('game_id');
                    $chapters->save();
                }
                return redirect()->action(
                    'ChapterController@show', ['id' => $request->get('game_id')]);
            }
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
        $chapters = Chapters::where('game_id', $id)->get();
       return view('admin.chapters.index',compact('chapters','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chapters = Chapters::where('chapter_id', $id)->first();
		return view('admin.chapters.edit',compact('chapters'));
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
        $chapters = Chapters::where('chapter_id', $id)->first();
		$chapters->name = $request->get('name');
		Chapters::where('chapter_id', $id)->update(['name' => $chapters->name]);
		return redirect()->action(
            'ChapterController@show', ['id' => $request->get('game_id')]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chapters = Chapters::where('chapter_id', $id)->first();
        Chapters::where('chapter_id', $id)->delete();
        return redirect()->action(
            'ChapterController@show', ['id' => $chapters->game_id]
        );
        
    }
}
