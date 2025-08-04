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

    public function about_anniiee(){

    }

    public function services(){

    }

    public function client_success(){

    }

    public function insights(){

    }

    public function media(){

    }

    public function contact(){

    }
    public function about_anniiee(){
      return view('front.about_anniiee');
    }
    public function service(){
      return view('front.service');
    }
}
