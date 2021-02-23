<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Donar;
use App\Category;
use\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function login(){

    	return view('back.home.login');
    }


//create security
      public function AdminPath(){
        $admin_name=Session::get('name');

        if($admin_name){
            return ;
        }else{
            return Redirect::to('/login')->send();
        }
    }
    
    public function admin(){
        $this->AdminPath();
    	return view('back.home.index');
    }






    public function adad(Request $req){
    	$name=$req->admin_email;
    	$pass=$req->admin_password;
    	
    	$result=DB::table('admins')
    		->where('gmail',$name)
    		->where('password',$pass)
    		->first();
   		if($result){
   			session::put('name',$result->name);
    		session::put('id',$result->id);
   			return Redirect::to('/admin');

   		}else{
   			session::put('messege','Email or Password is Invalid');
    		return Redirect::to('/login');
   		}
    	
    }

   


//admin  donar confirm

public function donars_confirm(){
   $this->AdminPath();
  $donar=Donar::orderBy('id','desc')->get();
  return view('back.donar.donars_confirm')->with('donar',$donar);
}
public function active_me($id){
   $this->AdminPath();
  DB::table('donars')->where('id',$id)->update(['publication_status'=>1]);
  return Redirect::to('/donars_confirm');
}
public function unactive_me($id){
   $this->AdminPath();
  DB::table('donars')->where('id',$id)->update(['publication_status'=>0]);
  return Redirect::to('/donars_confirm');
}
public function delete_donars($id){
   $this->AdminPath();
  $donar=DB::table('donars')->where('id',$id)->delete();
  return Redirect::to('/donars_confirm');
}







//donation_products-------------------------------------------------------------


public function donation_products(){

 $this->AdminPath();

  $products=DB::table('products')->join('donars','products.donar_id','=','donars.id')->select('products.*','donars.name','donars.phone','donars.image')->get();

return view('back.donation_products')->with('product',$products);

}

public function show_me($id){
   $this->AdminPath();
  DB::table('products')->where('p_id',$id)->update(['publication_status'=>1]);
  return Redirect::to('/donation_products');
}
public function hide_me($id){
   $this->AdminPath();
  DB::table('products')->where('p_id',$id)->update(['publication_status'=>0]);
  return Redirect::to('/donation_products');
}
public function delete_products($id){
   $this->AdminPath();
  $donar=DB::table('products')->where('p_id',$id)->delete();
  return Redirect::to('/donation_products');
}














//donation_request-------------------------------------------------------------


public function donation_request(){



  $products=DB::table('orders')->join('products','orders.product_id','=','products.p_id')->select('orders.*','products.pro_name','products.pro_image')->get();

return view('back.donation_request')->with('product',$products);

}
public function make_donar($id){
  DB::table('orders')->where('id',$id)->update(['aprouch_status'=>1]);
  return Redirect::to('/donation_request');
}

public function dhide_me($id){
  DB::table('orders')->where('id',$id)->update(['aprouch_status'=>0]);
  return Redirect::to('/donation_request');
}



}