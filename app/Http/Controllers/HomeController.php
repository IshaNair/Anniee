<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Menu;

class HomeController extends Controller
{
    public function index(){
      $menus = Menu::where('status','1')->orderBy('id','ASC')->get();

      return view('front.index',['menus'=>$menus]);
    }



    public function client_success(){
      return view('front.about_anniiee');
    }

    public function insights(){
     return view('front.about_anniiee');
    }

    public function media(){
     return view('front.about_anniiee');
    }

    public function contact(){
       return view('front.about_anniiee');
    }
    public function about_anniiee(){
      return view('front.about_anniiee');
    }
    public function services(){
      return view('front.service');
    }
}
