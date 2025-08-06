<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;

class GetsulugController extends Controller
{
     public function getslug(Request $request){

        $slug = Str::slug($request->title);
        return response()->json(['status'=>true, 'slug'=>$slug ], 200);

     }
}
