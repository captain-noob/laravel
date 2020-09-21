<?php

namespace App\Http\Controllers;

use App\Testimonialimage;
use Illuminate\Http\Request;

class TestimonialimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Testimonialimage::all();
        return view('admins.testimonial.image',['data'=>$data]);
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
        //storing the testimonial image section to database from admin
        $request->validate([

            'image'=>'required|mimes:jpeg,bmp,png',
            'name'=>'required',
            'designation'=>'required',
            'message'=>'required'
        ]);
        $data= new Testimonialimage();
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename=time().'.'.$extension;
            $file->move('image/testimonial/',$filename);
            $data->image=$filename;
        }
        $data->name=request('name');
        $data->designation=request('designation');
        $data->body=request('message');
        $data->save();
        return redirect('/admins/testimonial/gallery')->with('message','Data Uploaded');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonialimage  $testimonialimage
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonialimage $testimonialimage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonialimage  $testimonialimage
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonialimage $testimonialimage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonialimage  $testimonialimage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonialimage $testimonialimage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonialimage  $testimonialimage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //deleting the testimonial image section
        $data= Testimonialimage::find($id);
        $data->delete();
        return redirect('/admins/testimonial/gallery');
    }
}
