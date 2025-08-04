<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::orderBy('id','DESC')->paginate(5);
        return view('admin.brands',['brands'=>$brands]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create-brand');
    }

    public function store(Request $request)
    {
       $validator = Validator::make($request->all(),[
        'brand_name'=>'required|unique:brands,brand_name,except,id',
       ]);

       if($validator->passes()){
        $Brand = Brand::create([
          'brand_name'=>  $request->brand_name,
          'slug'=>  $request->slug,
           'status'=>  $request->status,
        ]);

        return redirect()->route('brands')->with('success','Barand created successfully.');

       }
       else{
             return redirect()->route('brand.create')->withInput()->withErrors($validator);
       }
    }

    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.edit-brand',['brand'=>$brand]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        $validator = Validator::make($request->all(),[
        'brand_name'=>'required',
        Rule::unique('brands','brand_name')->ignore($id),
       ]);

       if($validator->passes()){
        $brand = Brand::find($id);

        $brand->brand_name = $request->brand_name;
        $brand->slug = $request->slug;
        $brand->status = $request->status;
        $brand->update();

        return redirect()->route('brands')->with('success','Barand Update successfully.');

       }
       else{
             return redirect()->route('brand.edit')->withInput()->withErrors($validator);
       }

    }


    public function destroy(Request $request)
    {
        //dd($request->id);
        $brand = Brand::find($request->id);
        $brand->delete();
        return redirect()->route('brands')->with('success','Barand Update successfully.');
    }
}
