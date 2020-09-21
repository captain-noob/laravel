<?php

namespace App\Http\Controllers;

use App\Youtube;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $youtubes=Youtube::latest()->get();
        return view('admins.gallery.youtube',['data'=>$youtubes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        request()->validate([
            'youtubelink'=>'required',
            'title'=>'required',
            
        ]);
        		
      
      $url=request('youtubelink');
        $youtube=new youtube();
        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
       $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

        if (preg_match($longUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
            $link='https://www.youtube.com/embed/' . $youtube_id ;
            $youtube->youtubelink=$link;
            $youtube->title=request('title');
            $youtube->save();
            return back()->with('message','uploaded successfully');
        }

        elseif (preg_match($shortUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
            $link='https://www.youtube.com/embed/' . $youtube_id ;
            $youtube->youtubelink=$link;
            $youtube->title=request('title');
            $youtube->save();
            return back()->with('message','uploaded successfully');
        }
      
      else {
        return back()->with('message','youtube link is not found');
        
      }
      
    
        
         
    
     
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function show(Youtube $youtube)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function edit($id) 
    {
        $youtube = Youtube::find($id);
        return view('admins.gallery.youtubeedit',['data'=>$youtube]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        request()->validate([
            'youtubelink'=>'required',
            'title'=>'required',
            
        ]);
        $youtube = Youtube::find($id);  
        $youtube->youtubelink=request('youtubelink');
        $youtube->title=request('title');
        $youtube->save(); 
        return redirect('/admins/youtube')->with('message','updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $youtube = Youtube::find($id);
       $youtube->delete();
       return redirect('/admins/youtube');
        }
}
