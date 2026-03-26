<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class mycategorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mydata=category::all();
        return view('category.index',compact('mydata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
        [
                'category_name'=>'required',
        ],
        [
                'category_name.required'=>'name is required',
        ]

        );
        $create = new category();

         $create->category_name=$request->input('category_name');
        $create->save();
        // return redirect('category')->with('success','category hasbeen added');
        echo  "<script>alert('record added');window.location='category/create'</script>";

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
        $edit=category::where('category_id','=',$id)->first();
        return view('category.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate(
        [
                'category_name'=>'required',
        ],
        [
                'category_name.required'=>'name is required',
        ]

        );

        $edit=category::where('category_id',$id)->first();
        $edit->category_name=$request->input('category_name');

        $edit->save();
        echo  "<script>alert('record edit');window.location='/category'</script>";


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        category::where('category_id','=',$id)->delete();
        return redirect('category');
    }
}
