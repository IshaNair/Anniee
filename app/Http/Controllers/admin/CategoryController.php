<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
         $query = Category::query()
         ->orderBy('id', 'desc')
         ->when($request->filled('search_key'), fn ($q) =>
        $q->where('name', 'like', '%'.$request->search_key.'%')
           ->orWhere('slug', 'like', '%'.$request->search_key.'%')
      );

     $categories = $query->paginate(5)
    ->withQueryString();


        return view('admin.categories',['categories'=> $categories]);
    }

    public function create()
    {
        return view('admin.create-category');
    }

    public function store(Request $request)
    {

        $Validator = Validator::make($request->all(),[
            'name' =>'required|unique:categories,name,except,id',
            'slug' =>'required',
        ]);

        if($Validator->passes()){
          $category =  Category::create([
              'name'=>$request->name,
              'slug'=>$request->slug,
              'status'=>$request->status,
           ]);

           return redirect()->route('categories')->with('success','Category created successfully.');
        }
        else{
              return redirect()->route('categories.edit')->withInput()->withErrors($Validator);
        }

    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Request $request,$id)
    {
        //dd($request->id);

        $category = Category::find($id);

        return view('admin.edit-category',['category'=>$category]);
    }

    public function update(Request $request,$id)
    {
       // dd($category);

        $Validator = Validator::make($request->all(),[
            'name' =>'required',
            Rule::unique('categories','name')->ignore($id),
            'slug' =>'required',
        ]);

        if($Validator->passes()){
            $category = Category::findOrFail($id);
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->status = $request->status;
            $category->update();

           return redirect()->route('categories')->with('success','Category update successfully.');
        }
        else{
              return redirect()->route('categories.edit')->withInput()->withErrors($Validator);
        }
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->back()->with('error', 'Category not found.');
        }

        $category->delete();
        return redirect()->route('categories')
            ->with('success', 'Category deleted successfully.');

        }
}
