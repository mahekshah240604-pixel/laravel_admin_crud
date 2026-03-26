<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class myproductcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mydata=product::all();
        return view('product.index',compact('mydata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=category::all();
        return view('product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate(
        [
                'product_name'=>'required',
                'product_details'=>'required',
                'product_price'=>'required',
                'category_id'=>'required',
                'product_account'=>'required',
                'product_photopath'=>'required|image|mimes:jpg,png',
        ],
        [
                'product_name.required'=>'name is required',
                'product_details.required'=>'details is required',
                'product_price.required'=>'price is required',
                // 'category_id.required'=>'category id is required',
                'product_account.required'=>'product account is required',
                'product_photopath.required'=>'image is required',
                'product_photopath.mimes'=>'allow only jpg & png files',
        ]

        );

         $create = new product();

         $create->product_name=$request->input('product_name');
         $create->product_details=$request->input('product_details');
         $create->product_price=$request->input('product_price');
         $create->category_id=$request->input('category_id');
         $create->product_account=$request->input('product_account');
        //  $create->product_photopath=$request->input('product_photopath');
        if($request->hasFile('product_photopath'))
            {
                $file=$request->file('product_photopath');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('upload/',$filename);

                $create->product_photopath=$filename;
            }
        
        $create->save();
        // return redirect('category')->with('success','category hasbeen added');
        echo  "<script>alert('record added');window.location='product/create'</script>";
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
        $edit=product::where('product_id','=',$id)->first();
        $categories=category::all();
        return view('product.edit',compact('edit','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
        [
                'product_name'=>'required',
                'product_details'=>'required',
                'product_price'=>'required',
                'category_id'=>'required',
                'product_account'=>'required',
                'product_photopath'=>'required|image|mimes:jpg,png',
        ],
        [
                'product_name.required'=>'name is required',
                'product_details.required'=>'details is required',
                'product_price.required'=>'price is required',
                // 'category_id.required'=>'category id is required',
                'product_account.required'=>'product account is required',
                'product_photopath.required'=>'image is required',
                'product_photopath.mimes'=>'allow only jpg & png files',
        ]

        );

         $edit=product::where('product_id',$id)->first();
        $edit->product_name=$request->input('product_name');
        $edit->product_details=$request->input('product_details');
        $edit->product_price=$request->input('product_price');
        $edit->category_id=$request->input('category_id');
        $edit->product_account=$request->input('product_account');
        // $edit->product_photopath=$request->input('product_photopath');
         if($request->hasFile('product_photopath'))
            {
                $file=$request->file('product_photopath');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('upload/',$filename);

                $edit->product_photopath=$filename;
            }
        $edit->save();
        echo  "<script>alert('record edit');window.location='/product'</script>";

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product::where('product_id','=',$id)->delete();
        return redirect('product');
    }
}
