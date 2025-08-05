<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Menu;
use  App\Models\Post;

class HomeController extends Controller
{
    public function index(){
      $menus = Menu::where('status','1')->orderBy('id','ASC')->get();
      $leftposts = Post::where('status','1')->orderBy('id','ASC')
      ->skip(0)
      ->take(2)
      ->get();

       $righttposts = Post::where('status','1')->orderBy('id','ASC')
       ->skip(3)
        ->take(4)
        ->get();

      return view('front.index',['menus'=>$menus,'leftposts'=>$leftposts,'righttposts'=>$righttposts]);
    }



    public function client_success(){
      return view('front.client_success');
    }

    public function insights(){
     return view('front.insights');
    }

    public function media(){
     return view('front.media');
    }

    public function contact(){
       return view('front.contact');
    }
    public function about_anniiee(){
        $menus = Menu::where('status','1')->orderBy('id','ASC')->get();
      return view('front.about_anniiee',['menus'=>$menus]);
    }
    public function services(){
        $menus = Menu::where('status','1')->orderBy('id','ASC')->get();
      return view('front.service',['menus'=>$menus]);
    }


}
