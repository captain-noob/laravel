<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->get();
        return view('admins.news',['data'=>$news]);

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
        request()->validate([
            'image'=>['required','mimes:jpeg,bmp,png'],
            'body'=>'required',
            
        ]);
        $news=new news();
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename=time().'.'.$extension;
            $file->move('image/news/',$filename);
            $news->image=$filename;
        }
        $news->body=request('body');
        $news->save();
        return back()->with('message','News Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('admins.newsedit',['news'=>$news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          request()->validate([
            'image'=>['required','mimes:jpeg,bmp,png'],
            'body'=>'required',
            
        ]);
        $news=news::find($id);
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename=time().'.'.$extension;
            $file->move('image/news/',$filename);
            $news->image=$filename;
        }
        $news->body=request('body');
        $news->save();
        return redirect("/admins/news")->with('message','News Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
