<?php

namespace App\Http\Controllers;

use App\Testimonialyoutube;
use Illuminate\Http\Request;

class TestimonialyoutubeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $link=Testimonialyoutube::all();
        return view('admins.testimonial.youtube',['data'=>$link]);
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
        //storing the youtube link to database from admin
     
        request()->validate([
            'youtubelink'=>'required',
            
        ]);
        		
      
      $url=request('youtubelink');
        $youtube=new Testimonialyoutube();
        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
       $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

        if (preg_match($longUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
            $link='https://www.youtube.com/embed/' . $youtube_id ;
            $youtube->youtubelink=$link;
            $youtube->save();
            return back()->with('message','uploaded successfully');
        }

        elseif (preg_match($shortUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
            $link='https://www.youtube.com/embed/' . $youtube_id ;
            $youtube->youtubelink=$link;
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
     * @param  \App\Testimonialyoutube  $testimonialyoutube
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonialyoutube $testimonialyoutube)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonialyoutube  $testimonialyoutube
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonialyoutube $testimonialyoutube)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonialyoutube  $testimonialyoutube
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonialyoutube $testimonialyoutube)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonialyoutube  $testimonialyoutube
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $link=Testimonialyoutube::find($id);
        $link->delete();
        return redirect('/admins/testimonial/youtube');
    }
}
