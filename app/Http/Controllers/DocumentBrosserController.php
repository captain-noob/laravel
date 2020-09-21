<?php

namespace App\Http\Controllers;

use App\DocumentBrosser;
use Illuminate\Http\Request;

class DocumentBrosserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=DocumentBrosser::all();
        return view('admins.documents.documentbrosser',['data'=>$data]);
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
        $news=new DocumentBrosser();
        if($request->hasfile('file'))
        {
            $file=$request->file('file');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename=time().'.'.$extension;
            $file->move('storage/file/brosser',$filename);
            $news->file=$filename;
        }
        $news->title=request('title');
        $news->body=request('body');
        $news->save();
        return back()->with('message','Document Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DocumentBrosser  $documentBrosser
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentBrosser $documentBrosser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DocumentBrosser  $documentBrosser
     * @return \Illuminate\Http\Response
     */
    public function edit(DocumentBrosser $documentBrosser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DocumentBrosser  $documentBrosser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocumentBrosser $documentBrosser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DocumentBrosser  $documentBrosser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $news=DocumentBrosser::find($id);
        $news->delete();
        return redirect("/admins/document/brosser");
    }
}
