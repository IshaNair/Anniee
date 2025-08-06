<?php

namespace App\Http\Controllers\support;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthenticateController extends Controller
{
    public function index(){
        return view('support.login');
    }

    public function authentication(Request $request){
      $validator = Validator::make($request->all(),[
        'email'=>'required',
        'password'=>'required',
      ]);

      if($validator->passes()){

        if(!Auth::guard('support')->attempt($request->only('email','password'))){
           return redirect()->route('support.login')
                     ->with('error','Invalid password of email');
        }
           $support = Auth::guard('support')->user();

          if($support->role !='support' ){
            Auth::guard('support')->logout();
             return redirect()->route('support.login')
                   ->with('message','You are not authorise to access this page!');
          }

          return redirect()->route('support.dashboard');

      }
      else{
          return redirect()->route('support.login')->withInput()->withErrors($validator);
      }

    }

    public function logout(){
       Auth::guard('support')->logout();
             return redirect()->route('support.login')
                   ->with('message','You are logout successfully!');

    }
}
