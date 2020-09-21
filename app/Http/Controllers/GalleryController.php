<?php

namespace App\Http\Controllers;

use App\gallery;
use App\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Redirect;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $folder=Folder::all()->skip(3);
        $a2folder=Folder::where('folder','A2 Winners')->first();
        $b2folder=Folder::where('folder','B2 Winners')->first();
        $c2folder=Folder::where('folder','C2 Winners')->first();

        return view('admins.gallery.gallery',['a2folder'=>$a2folder,'b2folder'=>$b2folder,'c2folder'=>$c2folder,'data'=>$folder]);
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
    public function store(Request $request,$id)
    {
        request()->validate([
            'image'=>['required','mimes:jpeg,bmp,png'],
            
            
        ]);
        $gallery=new gallery();
        $folder=folder::find($id);
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename=time().'.'.$extension;
            $file->move('image/gallery/',$filename);
            $gallery->image=$filename;
            
        }
        $gallery->folder=$folder->folder;
        folder::where('folder',$folder->folder)->update(['image'=>$filename]);
        $gallery->body=request('body');
        $gallery->save();
        return redirect()->back()->with('message','Image Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $folder = Folder::find($id);
        $gallery =Gallery::where('folder','=',$folder->folder)->delete();
        $folder->delete();

        return redirect('/admins/gallery');
    }
    public function folder($id)
    {
        
    }
}
