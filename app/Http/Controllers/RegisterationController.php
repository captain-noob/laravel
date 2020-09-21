<?php

namespace App\Http\Controllers;

use App\Registeration;
use Illuminate\Http\Request;
use App\Exports\RegisterationExport;
use Excel;
class RegisterationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //displaying the result to admin ,registeredstudent section
        $data = Registeration::latest()->get();
        return view('admins.formupdate.registeredstudent',['data'=>$data]);
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
        //storing the user input values to  database 
        $request->validate([

            'name'=>'required|min:2',
            'phone_number'=>'required|numeric|digits:10',
            'email'=>'required|email',
            'age'=>'required|min:2',
            'address'=>'required',
            'qualification'=>'required',
            'language'=>'required',

            
            
        ]);
        $registered= new Registeration();
        $registered->name=request('name');
        $registered->phone=request('phone_number');
        $registered->email=request('email');
        $registered->age=request('age');
        $registered->address=request('address');
        $registered->qualification=request('qualification');
        $registered->branch=request('language');
        $registered->date=date('Y:m:d');
        $registered->contacted='null';
        $registered->save();
        return back()->with('message','updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registeration  $registeration
     * @return \Illuminate\Http\Response
     */
    public function show(Registeration $registeration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registeration  $registeration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registeration $registeration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registeration  $registeration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $contact=request('contact');
        Registeration::where('id',$id)->update(['contacted'=>$contact]);
        return redirect('/admins/registeredstudent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registeration  $registeration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registeration $registeration)
    {
        //
    }
    public function filter( Request $request)
    {
        $search=request('search');
        $filter1=request('filter1');
        $filter2=request('filter2');
        if(!$search && $filter1 == 'null'&& $filter2 == 'null')
        {
            return redirect('/admins/registeredstudent');
        }
        if($search) 
        {
            if($filter1 == 'null'&& $filter2 == 'null')
            {
                $user=Registeration::where('name','like',"%".$search."%")->get();
                return view('admins.formupdate.registeredstudent',['data'=>$user]);
            }
            elseif($filter1 && !$filter2)
            {
                $user=Registeration::where([['name','like',"%".$search."%"],['contacted','=',$filter1]])->get();
                return view('admins.formupdate.registeredstudent',['data'=>$user]);
            }
            elseif($filter1 && $filter2)
            {
                $user=Registeration::where([['name','like',"%".$search."%"],['contacted','=',$filter1]])->latest()->get();
                return view('admins.formupdate.registeredstudent',['data'=>$user]);
            }
            elseif(!$filter1 && $filter2)
            {
                $user=Registeration::where(['name','like',"%".$search."%"])->latest()->get();
                return view('admins.formupdate.registeredstudent',['data'=>$user]);
            }
       
        }
        if(!$search)
        {
            if($filter1 && !$filter2)
            {
                $user=Registeration::where(['contacted'=>$filter1])->get();
                return view('admins.formupdate.registeredstudent',['data'=>$user]);
            }
            elseif($filter1 && $filter2)
            {
                $user=Registeration::where(['contacted'=>$filter1])->latest()->get();
                return view('admins.formupdate.registeredstudent',['data'=>$user]);
            }
            elseif(!$filter1 && $filter2)
            {
                $user=Registeration::latest()->get();
                return view('admins.formupdate.registeredstudent',['data'=>$user]);
            }
        }
    }
    public function export(Request $request)
    {
        $from=strtotime(request('from'));
        $to=strtotime(request('to'));
        $export = new RegisterationExport($from,$to);
        return Excel::download($export,'newsletter.xlsx');
        
       
    }
}
