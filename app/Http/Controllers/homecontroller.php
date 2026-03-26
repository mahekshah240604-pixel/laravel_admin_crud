<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class homecontroller extends Controller
{
    public function home()
    {
        if(Session::has('login_id'))
            {
                $a=Session::get('name');
                return view('home',['mytxt'=>$a]);
            }else{
                return redirect('/login');
            }
    }

    public function logout()
    {
        Session::forget('login_id');
        return redirect('/login/create');
    }
}
