<?php

namespace App\Http\Controllers;

use App\Folder;
use App\gallery;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $folder= Folder::find($id);
        $data= Folder::all()->skip(3);
        $folders=$folder->folder;
        $galleries=gallery::where(['folder'=>$folders])->latest()->get();   
        $a2folder=Folder::where('folder','A2 Winners')->first();
        $b2folder=Folder::where('folder','B2 Winners')->first();
        $c2folder=Folder::where('folder','C2 Winners')->first();    
        return view('admins.gallery.galleryfolder',['a2folder'=>$a2folder,'b2folder'=>$b2folder,'c2folder'=>$c2folder,'galleries'=>$galleries,'data'=>$data,'folderdata'=>$folder]);
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
        $valid=Folder::where('folder',"=",request('folder'))->distinct()->first();
        if($valid)
        {
            return back()->with('message','Folder Already Exits');
            
        }
        else{
        $request->validate([
            'folder'=>'required'
        ]);
        $folder= new Folder();
        $folder->folder=request('folder');
        $folder->image='null';
        $folder->save();
        return back()->with('message','Folder Created');
        
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function show(Folder $folder)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function edit(Folder $folder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Folder $folder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Folder $folder)
    {
        //
    }
}
