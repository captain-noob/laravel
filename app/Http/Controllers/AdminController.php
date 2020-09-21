<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Profile;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
   return view('admins.dashboard');
    }
    function newslettersubscription()
    {
        $data = home::latest()->get();
        return view('admins.formupdate.newslettersubscription',['subcription'=>$data]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function login(Request $request)
    { 
        request()->validate([
            'email'=>'required|email',
            'password'=>'required',
            
        ]);
      $admin=Profile::where([['email',$request->email],['password',$request->password]])->first();
      if($admin)
      {
          $request->session()->put('data',$request->email,$request->password);
            return redirect('/admins');
      }
      else
      {
           return redirect()->back()->with('message','email or passowrd is wrong');
         
      }      
    }
    function logout()
    {
        session()->forget('data');
        return redirect("adminlogin");
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
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
