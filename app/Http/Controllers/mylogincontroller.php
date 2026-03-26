<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Models\signup;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

 use Illuminate\Support\Facades\Hash;

class mylogincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mydata=login::all();
        return view('login.index',compact('mydata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('login.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'email'=>'required|email',
                'password'=>'required',
            ],
            [
                'email.required'=>'email is required',
                'email.email'=>'allow only valid email',
                'password.required'=>'password is required',
                // 'password.max'=>'allow only 10 charectore',
            ]

        );
        //$create=new login();
        $create = new login();

         $create->email=$request->input('email');
         $create->password = Hash::make($request->input('password'));
         $create->save();
        
        // $emailses=Session::get('email');
        //  $passwordses=Session::get('password');

         

         $user = Login::where('email', $request->input('email'))->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {

        // Session::put('is_logged', true);
        Session::put('login_id', $user->login_id);

        return redirect('/home')->with('success', 'Login Successfully');
    } else {
        // return redirect('/login/create')->with('error', 'Login Failed');
        // return redirect('/login')->with('error', 'Invalid Email or Password');   
        echo "<script>alert('login fail');window.location='/login'</script>";
        }
            

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit=login::where('login_id','=',$id)->first();
        return view('login.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate(
            [
                'email'=>'required|email',
                'password'=>'required|max:100',
            ],
            [
                
                 'email.required'=>'email is required',
                'email.email'=>'allow only valid email',
                'password.required'=>'password is required',
                'password.max'=>'allow only 100 charectore',
            ]

        );
        $edit=login::where('login_id',$id)->first();
        $edit->email = $request->input('email');
        $edit->password = $request->input('password');

        $edit->save();

        return redirect('/login')->with('successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         login::where('login_id','=',$id)->delete();
        return redirect('/login');
    }
}
