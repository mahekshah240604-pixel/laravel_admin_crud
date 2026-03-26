<?php

namespace App\Http\Controllers;

use App\Models\signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\DB;

class mysignupcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // return view('signup.index');
       $mydata=signup::all();
       return view('signup.index',compact('mydata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('signup.create');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'mobileno'=>'required|digits:10',
                'email'=>'required|email',
                'password'=>'required|max:10',
                'gender'=>'required',
            ],
            [
                'name.required'=>'name is required',
                'mobileno.required'=>'mobile no is required',
                'mobileno.digits'=>'allow only 10 digits number',
                'email.require'=>'email is required',
                'email.email'=>'allow only valid email',
                'password.required'=>'password is required',
                'password.max'=>'allow only 100 charectore',
                'gender.required'=>'gender is required',
            ]

        );


        $create = new signup();


         $create->name=$request->input('name');
         $create->mobileno=$request->input('mobileno');
         $create->email=$request->input('email');
         $create->password=$request->input('password');
         $create->gender=$request->input('gender');

           $create->save();

            Session::put('name',$create->name);
            Session::put('mobileno',$create->mobileno);
            Session::put('email',$create->email);
            Session::put('password',$create->password);
            Session::put('gender',$create->gender);
     
        // DB::table('signups')->insert(['name','mobileno','email','password','gender']);
        return redirect('/login/create')->with('successfully');
        return back()->with('error','signup failed');
        //echo "signup sucessfully";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit=signup::where('signup_id','=',$id)->first();
        return view('signup.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'name'=>'required',
                'mobileno'=>'required|digits:10',
                'email'=>'required|email',
                'password'=>'required',
                'gender'=>'required',
            ],
            [
                'name.required'=>'name is required',
                'mobileno.required'=>'mobile no is required',
                'mobileno.digits'=>'allow only 10 digits number',
                'password.required'=>'password is required',
                'password.max'=>'allow only 100 charectore',
                'gender.required'=>'gender is required',
            ]

        );


         $edit=signup::where('signup_id',$id)->first();
        $edit->name = $request->input('name');
        $edit->mobileno = $request->input('mobileno');
        $edit->email = $request->input('email');
        $edit->password = $request->input('password');
        $edit->gender = $request->input('gender');

        $edit->save();

        return redirect('signup')->with('seccesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        signup::where('signup_id','=',$id)->delete();
        return redirect('/signup');
    }
}
