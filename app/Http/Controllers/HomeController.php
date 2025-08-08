<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Menu;
use  App\Models\Post;
use  App\Models\Customer;

use Illuminate\Support\Facades\Validator;

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
        $menus = Menu::where('status','1')->orderBy('id','ASC')->get();
      return view('front.client_success',['menus'=>$menus]);
    }

    public function insights(){
        $menus = Menu::where('status','1')->orderBy('id','ASC')->get();
     return view('front.insights',['menus'=>$menus]);
    }

    public function media(){
        $menus = Menu::where('status','1')->orderBy('id','ASC')->get();
     return view('front.media',['menus'=>$menus]);
    }

    public function contact(){
        $menus = Menu::where('status','1')->orderBy('id','ASC')->get();
       return view('front.contact',['menus'=>$menus]);
    }
    public function about_anniiee(){
        $menus = Menu::where('status','1')->orderBy('id','ASC')->get();
      return view('front.about_anniiee',['menus'=>$menus]);
    }
    public function services(){
        $menus = Menu::where('status','1')->orderBy('id','ASC')->get();
      return view('front.service',['menus'=>$menus]);
    }



    public function store_service(Request $request){
       $validator = Validator::make($request->all(),[
        'name' =>'required',
        'email' => 'required|email|confirmed',
        'phone' => 'required|digits:10',
        'session_date'=>'required',
        'session_time'=>'required|date_format:h:i A',
       ]);


       if($validator->passes()){

          if(!empty($request->privacy_policy)){
               $policy = $request->privacy_policy;
          }
          else{
               $policy = 'no';
          }
          $formatted = \Carbon\Carbon::createFromFormat('g:i A', $request->session_time)->format('g:i A');

          $time =  \Carbon\Carbon::createFromFormat('H:i', trim($request->session_time));

          dd($formatted);

           $custome = Customer::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'session_date'=> $request->session_date,
                'session_time'=> $request->session_time,
                'privacy_policy' => $policy,

           ]);

           return redirect()->route('front.services')->with('success','Sercice book successfully.');
       }

      else{
             return redirect()->route('front.services')->withInput()->withErrors($validator);
      }

    }


}
