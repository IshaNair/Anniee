<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Menu;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function index(){
        $menus = Menu::orderBy('id','DESC')->paginate(5);
        return view('admin.menu.menus',['menus'=>$menus]);
    }

    public function create(){
       return view('admin.menu.create-menu');
    }

    public function store(Request $request){

      $validator = Validator::make($request->all(),[
        'title'=>'required|unique:menus,title,except,id',
        'page_link'=>'required',
      ]);

      if($validator->passes()){
           $menu = Menu::create([
            'title'=>$request->title,
            'slug'=>$request->slug,
            'page_link'=>$request->page_link,
            'status'=>$request->status,
           ]);

           return redirect()->route('menus')->with('success','Menu Create successfully.');
      }
      else{
          return redirect()->route('menu.create')->withInput()->withErrors($validator);
      }
    }

    public function edit($id){
        $menu = Menu::find($id);
      return view('admin.menu.edit-menu',['menu'=>$menu]);
    }

    public function update(Request $request,$id){

      $validator = Validator::make($request->all(),[
        'title'=>'required|unique:menus,title,'.$id,
        'page_link'=>'required',
      ]);

      if($validator->passes()){
        $menu = Menu::find($id);

            $menu->title = $request->title;
            $menu->slug = $request->slug;
            $menu->page_link = $request->page_link;
            $menu->status = $request->status;
            $menu->update();

           return redirect()->route('menus')->with('success','Menu Update successfully.');
      }
      else{
          return redirect()->route('menu.create')->withInput()->withErrors($validator);
      }
    }


}
