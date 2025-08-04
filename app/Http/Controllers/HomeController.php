<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
      return view('front.index');
    }
    public function about_anniiee(){
      return view('front.about_anniiee');
    }
    public function service(){
      return view('front.service');
    }
}
