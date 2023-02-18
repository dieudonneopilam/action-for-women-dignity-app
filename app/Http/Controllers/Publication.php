<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Comment;
use Illuminate\Http\Request;
use App\Models\Publication as Pub;

class Publication extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $publications = Pub::all();

        return view('pages.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addPub');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => ['required'],
            'file' => ['required']
        ]);

        $filename = time().'.'.$request->file->extension();

        $path = $request->file->storeAs(
            'avatars',
            $filename,
            'public'
        );
        Pub::create([
            'text'=>$request->content,
            'file'=>$path,
            'datepub'=>now(),
            'nblike' => 0,
            'nbcomment' => 0
        ]);

        return redirect()->route('oeuvres');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('pages.comments',[
            'id'=>$id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publication = Pub::findOrfail($id);

        return view('pages.editPub',[
            'publication' => $publication
        ]);
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
        $request->validate([
            'content' => ['required'],
            'file' => ['required']
        ]);

        $filename = time().'.'.$request->file->extension();

        $path = $request->file->storeAs(
            'avatars',
            $filename,
            'public'
        );
        Pub::findOrFail($id)->update([
            'text'=>$request->content,
            'file'=>$path,
        ]);

        return redirect()->route('oeuvres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publication = Pub::findOrFail($id);
        $publication->delete();
        return redirect()->route('pub.index');
    }
}
