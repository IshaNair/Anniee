<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$subcategorys = Subcategory::orderBy('id','DESC')->get();
        $subcategorys = Subcategory::with('category')->orderBy('id','DESC')->paginate(5);
        return view('admin.subcategory',['subcategorys'=>$subcategorys]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status',1)->get();
        return view('admin.create-subcategory',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|unique:subcategories,name,except,id',
            'category_id'=>'required',
        ]);

        if($validator->passes()){
            $subcategory = Subcategory::create([
               'name'=> $request->name,
               'slug'=> $request->slug,
               'category_id'=> $request->category_id,
               'status'=> $request->status,
            ]);

            return redirect()->route('subcategory')->with('success','Subcategory created successfull.');
        }
        else{
              return redirect()->route('subcategory.create')->withInput()->withErrors($validator);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $subcat = Subcategory::find($id);
        $categories = Category::where('status',1)->get();

        return view('admin.edit-subcategory',['subcat'=>$subcat,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
             Rule::unique('subcategories','name')->ignore($id),
            'category_id'=>'required',
        ]);

        if($validator->passes()){
            $subcategory = Subcategory::create([
               'name'=> $request->name,
               'slug'=> $request->slug,
               'category_id'=> $request->category_id,
               'status'=> $request->status,
            ]);

            $subcategory = Subcategory::findOrFail($request->id);
            $subcategory->name = $request->name;
            $subcategory->slug = $request->slug;
            $subcategory->category_id = $request->category_id;
            $subcategory->status = $request->status;
            $subcategory->update();

            return redirect()->route('subcategory')->with('success','Subcategory Update successfull.');
        }
        else{
              return redirect()->route('subcategory.create')->withInput()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subcategory = Subcategory::find($id);

        if (!$subcategory) {
            return redirect()->back()->with('error', 'Sub Category not found.');
        }

        $subcategory->delete();
        return redirect()->route('subcategory')
            ->with('success', 'Sub Category deleted successfully.');

    }

}
