<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data=$request->session()->get('data');
        $profile = Profile::where('email',$data)->first();
      return view('admins.profile',['data'=>$profile]);

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $request->validate([

            'oldpassword'=>'required',
            'password'=>'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation'=>'min:8'
        ]);

        $profile=Profile::find($id);

        if($profile->password === request("oldpassword"))
        {
           if(request('password_confirmation')==request('password'))
           {
               Profile::where('id',$profile->id)->update(['password'=>request('password')]);
               return back()->with('message','Password Updated Successfully');
           }
        //    else
        //    {
        //      return back()->with('message','passwords  not matching');
        //    }
        }
        else
        {
            return back()->with('message','old password not matching');

        }
        
      
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
