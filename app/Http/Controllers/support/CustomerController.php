<?php

namespace App\Http\Controllers\support;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::orderBy('id','DESC')->paginate(5);
         //echo"customer";

        return view('support.customer.list',['customers'=>$customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('support.customer.create');
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
            $customer = Customer::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'role'=>   $request->role,
                'phone'=>  $request->phone,
                'address'=>$request->address,
                'status'=> $request->status,
            ]);

            return redirect()->route('list.customer')->with('success','User Create successfull.');
        }
        else{
              return redirect()->route('customer.create')->withInput()->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
