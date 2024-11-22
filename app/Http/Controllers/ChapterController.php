<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chapters = Chapter::all();
        return view('admin.manageChapter')->with('chapters',$chapters);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'chapter_title' => 'required|max:255',
            'chapter_desc'=> 'required|max:255',



        ]);
        $chapter = new Chapter();
        $chapter->chapter_title = $request->chapter_title;
        $chapter->chapter_slug = $request->chapter_slug;
        $chapter->chapter_desc = $request->chapter_desc;
        $chapter->course_id= $request->course_id;
        $chapter->save();
        return redirect()->route('admin.chapter.index')->with('success'.'created chapter successfully');
        
       
    }

    


    

    /**
     * Display the specified resource.
     */
    public function show(Chapter $chapter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chapter $chapter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chapter $chapter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chapter $chapter)
    {
        //
    }
}
