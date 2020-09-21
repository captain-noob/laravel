<?php

namespace App\Http\Controllers;

use App\DocumentNews;
use Illuminate\Http\Request;

class DocumentNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=DocumentNews::all();
        return view('admins.documents.documentnews',['data'=>$data]);
        
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
        $request->validate([

            'file'=>'required|mimes:pdf',
            'title'=>'required',
            'body'=>'required',
        ]);
        $news=new DocumentNews();
        if($request->hasfile('file'))
        {
            $file=$request->file('file');
            $dest='public/storage/file/news/';
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename=time().'.'.$extension;
           $path = $request->file('file')->storeAs($dest,$filename);
            $news->file=$filename;
            session()->put('path',$path);
        }
        $news->title=request('title');
        $news->body=request('body');
        $news->save();
        return back()->with('message','Document Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DocumentNews  $documentNews
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentNews $documentNews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DocumentNews  $documentNews
     * @return \Illuminate\Http\Response
     */
    public function edit(DocumentNews $documentNews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DocumentNews  $documentNews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocumentNews $documentNews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DocumentNews  $documentNews
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $news=DocumentNews::find($id);
        $news->delete();
        return redirect("/admins/document/news");
    }
}
