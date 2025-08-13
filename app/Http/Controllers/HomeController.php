<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Menu;
use  App\Models\Post;
use  App\Models\Customer;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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
        ->take(3)
        ->get();

      return view('front.index',['menus'=>$menus,'leftposts'=>$leftposts,'righttposts'=>$righttposts]);
    }



    public function client_success(){
        $menus = Menu::where('status','1')->orderBy('id','ASC')->get();

        $client_success_post1 = Post::where('status','1')->where('page_type','client-success-1')->first();
        $succc_manage = Post::where('status','1')->where('page_type','success-manager')->get();

      return view('front.client_success',[
        'menus'=>$menus,
        'client_success_post1'=>$client_success_post1,
        'succc_manages'=>$succc_manage
    ]);
    }

    public function insights(){
        $menus = Menu::where('status','1')->orderBy('id','ASC')->get();
        $vedic_forecast = Post::where('status','1')->where('page_type','vedic-forecast')->first();

       return view('front.insights',['menus'=>$menus, 'vedic_forecast'=>$vedic_forecast]);
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
        $anniiee_post = Post::where('status','1')->where('page_type','anniiee_1')->first();
        $anniiee_post2 = Post::where('status','1')->where('page_type','about-anniiee-2')->first();

        $menus = Menu::where('status','1')->orderBy('id','ASC')->get();
      return view('front.about_anniiee',['menus'=>$menus,'anniiee_post'=>$anniiee_post,'anniiee_post2'=>$anniiee_post2,]);
    }
    public function services(){
        $menus = Menu::where('status','1')->orderBy('id','ASC')->get();
         $service_post1 = Post::where('status','1')->where('page_type','service-1')->first();

        return view('front.service',['menus'=>$menus,'service_post1'=>$service_post1]);
    }



    public function store_service(Request $request){
       $validator = Validator::make($request->all(),[
        'name' =>'required',
        'email' => 'required|email|confirmed',
        'phone' => 'required|digits:10',
        'session_date'=>'required',
        'session_time'=>'required',
       ]);


       if($validator->passes()){

          if(!empty($request->privacy_policy)){
               $policy = $request->privacy_policy;
          }
          else{
               $policy = 'no';
          }


           $custome = Customer::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'session_date'=> $request->session_date,
                'session_time'=> $request->session_time,
                'privacy_policy' => $policy,

           ]);

           return redirect()->route('front.thanks')->with('success','Thanks, Your Session booking successfully.');
       }

      else{
             return redirect()->route('front.services')->withInput()->withErrors($validator);
      }

    }

    public function booking_thanks(){
        $menus = Menu::where('status','1')->orderBy('id','ASC')->get();
         return view('front.booking_thanks',['menus'=>$menus]);
    }

    public function customer_login(){

       $validator = Validator::make($request->all(),[
        'email'=>'required',
        'password'=>'required',
      ]);

      if($validator->passes()){

        if(!Auth::guard('admin')->attempt($request->only('email','password'))){
           return redirect()->route('admin.login')
                     ->with('error','Invalid password of email');
        }
           $admin = Auth::guard('admin')->user();

          if($admin->role !='admin' ){
            Auth::guard('admin')->logout();
             return redirect()->route('admin.login')
                   ->with('message','You are not authorise to access this page!');
          }

          return redirect()->route('admin.dashboard');

      }
      else{
          return redirect()->route('admin.login')->withInput()->withErrors($validator);
      }

    }

}
