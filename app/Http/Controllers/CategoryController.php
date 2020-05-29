<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(){
        $categories= Category::all();




        return response()->json([
'categories'=>$categories
        ],200);

    }

   public function addCategory(Request $request){
       $this->validate($request,[
           'name' =>'required|string|max:255'
       ]);
       Category::create($request->all());
   }
}
