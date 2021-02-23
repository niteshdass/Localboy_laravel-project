<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
class CategoryController extends Controller
{
    public function add_cat(){

    	return view('back.category.add_cat');
    }


    //manage category

    public function manage_cat(){

    	$distric=Category::orderBy('id','desc')->get();

    	return view('back.category.manage_cat')->with('category',$distric);
    }



//delete_cat

	 public function delete_cat($id){

    	$distric=Category::find($id);
    	if($distric){
    	$distric->delete();
    	return view('back.category.add_cat');
    }

    	
    }
    //add category

    public function add_cate(Request $request){

    	$request->validate([

		    'name' => 'required',
		    'desc' => 'required',
		]);

    	$products=new Category;

    	$products->name=$request->name;
    	$products->desc=$request->desc;
    	$products->save();

    	return redirect()->route('manage_cat');
    }
}
