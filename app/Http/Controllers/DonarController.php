<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Donar;
use App\Product;
use Image;
use\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
use DB;
class DonarController extends Controller
{
    public function donar_list(){
      
      $donar=Donar::orderBy('id','desc')->where('publication_status',1)->paginate(1);

    	return view('home.donar_list')->with('donar',$donar);
    }


    public function registretion(){
    	return view('home.registretion');
    }
    public function user_logout(){
      Session::flush();
      return Redirect::to('/registretion');
   }

    public function user_login(Request $request){
    		$request->validate([

		    'email' => 'required',
		    'password' => 'required',
		   

		]);
    		$name=$request->email;
    		$pass=$request->password;

    		$result=DB::table('donars')
    		->where('gmail',$name)
    		->where('password',$pass)
    		->first();
   		if($result){
   			session::put('user_name',$result->name);
    		session::put('user_id',$result->id);
   			return Redirect::to('/home');

   		}else{
   			session::put('messege','Email or Password is Invalid');
    		return Redirect::to('/registretion');
   		}
    }

    public function registrestion_data(Request $request){
    	$request->validate([

		    'name' => 'required',
		    'gmail' => 'required|unique:donars|max:255',
		    'password' => 'required',
		    'phone' => 'required|unique:donars|max:255',
		    'address' => 'required',
		    'about_us' => 'required',
		    'image' => 'required',
		]);


    	$products=new Donar;
    	$products->name=$request->name;
    	$products->gmail=$request->gmail;
    	$products->password=$request->password;
    	$products->phone=$request->phone;
    	$products->address=$request->address;
    	$products->desc=$request->about_us;

    	if($request->hasFile('image')){
            $image=$request->file('image');
            $img=time().'.'.$image->getClientOriginalExtension();

            $path=public_path($img);

            Image::make($image)->save($path);

            $products->image=$img;
            $products->save();
             session::put('messege','Registration has been success');
    	return redirect()->route('registretion');
        }

    	
    	
    }

//donar data---------------------------------------------------------------------------------------
     public function donar_data(Request $request,$id){
    	
    	$products=new Product;
    	$products->donar_id=$id;
    	$products->pro_name=$request->name;
    	$products->pro_cat=$request->category;
    	$products->num_product=$request->num_pro;
    	$products->desc=$request->desc;

if($request->hasFile('image')){
            $image=$request->file('image');
            $img=time().'.'.$image->getClientOriginalExtension();

            $path=public_path($img);

            Image::make($image)->save($path);

            $products->pro_image=$img;
            $products->save();
             session::put('messege','Product Donate  has been success');
    	return redirect()->route('home');
        }
    }


    public function donate(){
    	return view('home.donate');
    }
}
