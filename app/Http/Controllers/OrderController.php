<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use Image;
use\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
use DB;
class OrderController extends Controller
{
    
    public function online_orde($id){
        $id=$id;

    	return view('home.online_order')->with('id',$id);
    }
      public function online_order_request(Request $request){
     

    	$products=new Order;
    	$products->product_id=$request->id;
    	$products->name=$request->name;
    	$products->gmail=$request->gmail;
    	$products->phone=$request->phone;
    	$products->present_address=$request->address;
    	$products->desc_problem=$request->why_need;
    	$products->say_about_yourself=$request->about_us;

    	if($request->hasFile('image')){
            $image=$request->file('image');
            $img=time().'.'.$image->getClientOriginalExtension();

            $path=public_path($img);

            Image::make($image)->save($path);

            $products->image=$img;
            $products->save();
             session::put('messege','Order Request Has Been Success..We will Soon Contact You');
    	return redirect()->route('online_orde',$request->id);
        }


    	
    }
}
