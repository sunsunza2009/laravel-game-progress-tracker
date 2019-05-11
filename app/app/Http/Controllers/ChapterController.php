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
       $chapters = Chapters::all();
       return view('admin.chapters.index',compact('chapters'));
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
			'name' => 'required'
		]
		);
		
		$chapters = new Chapters;
		$chapters->name = $request->get('name');
		$chapters->game_id = '1';
		$chapters->save();
		return redirect('/admin/chapters');
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
		return redirect('/admin/chapters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chapters::where('chapter_id', $id)->delete();
		return redirect("/admin/chapters");
    }
}
