<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthenticateController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function authentication(Request $request){
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

    public function logout(){
       Auth::guard('admin')->logout();
             return redirect()->route('admin.login')
                   ->with('message','You are logout successfully!');

    }
}
