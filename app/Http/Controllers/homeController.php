<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\Http\Requests;
use Session;
use App\Donar;
use App\Order;
use App\Product;
use App\HalpPost;
use DB;
use Image;
use Illuminate\Support\Facades\Redirect;
session_start();
class homeController extends Controller
{
    public function index(){
    	return view('home.index');
    }

  
    
    
    
    

  
    public function profile($id){

        $donar=DB::table('donars')->join('products','donars.id','=','products.donar_id')->select('donars.*','products.pro_name','products.pro_image','products.desc','products.num_product','products.p_id','products.stock')->where('phone',$id)->paginate(2);
    	return view('home.profile')->with('donar',$donar);
    }


    public function profile_user($id){
         $donar=DB::table('donars')->where('id',$id)->get();
        
        return view('home.profile_user')->with('product',$donar);
    }




    public function take(){
        $order=DB::table('orders')->join('products','orders.product_id','=','products.p_id')->select('orders.*','products.pro_name','products.pro_cat')->where('aprouch_status',1)->paginate(2);
    	return view('home.take')->with('order',$order);


    }
    public function contact(){
    	return view('home.contact');
    }


/////////////////////information///////////////////////

    
        public function information(Request $request){
        

        $products=new HalpPost;
        $products->name=$request->name;
        $products->gmail=$request->gmail;
     
        $products->phone=$request->phone;
        $products->address=$request->address;
        $products->desc_problem=$request->about_us;

        if($request->hasFile('image')){
            $image=$request->file('image');
            $img=time().'.'.$image->getClientOriginalExtension();

            $path=public_path($img);

            Image::make($image)->save($path);

            $products->image=$img;
            $products->save();
             session::put('messege','Registration has been success');
        return redirect()->route('home');

       
    }








   
}
}

