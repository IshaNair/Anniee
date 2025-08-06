<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('id','DESC')->get();

        return view('admin.user.list',['users'=>$users]);
    }

    public function users_permition(){
      $users = User::orderBy('id','DESC')->get();
      return view('admin.user.list',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|unique:users,email,except,id',
            'password'=>'required',
            'role'=>'required|not_in:""',
            'phone'=>'required',
            'address'=>'required',
        ]);

        if($validator->passes()){
            $user = User::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> Hash::make($request->password),
                'role'=>   $request->role,
                'phone'=>  $request->phone,
                'address'=>$request->address,
                'status'=> $request->status,
            ]);

            return redirect()->route('user.list')->with('success','User Create successfull.');
        }
        else{
              return redirect()->route('create.user')->withInput()->withErrors($validator);
        }

    }

    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);

        return view('admin.user.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|unique:users,email,'.$id,
            'role'=>'required|not_in:""',
            'phone'=>'required',
            'address'=>'required',
        ]);

        if($validator->passes()){

            $user = $user = User::find($id);

                $user->name = $request->name;
                $user->email = $request->email;
                $user->role =   $request->role;
                $user->phone =  $request->phone;
                $user->address = $request->address;
                $user->status = $request->status;
              $user->update();

            return redirect()->route('user.list')->with('success','User Update successfull.');
        }
        else{
              return redirect()->route('create.user')->withInput()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
