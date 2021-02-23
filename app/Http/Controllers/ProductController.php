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
class ProductController extends Controller
{
      public function product($id){
      	$product=DB::table('products')->join('donars','products.donar_id','=','donars.id')->orderBy('id','desc')->select('products.*','donars.name','donars.phone')->where('pro_cat',$id)->where('products.publication_status',1)->paginate(1);
    	return view('home.product')->with('product',$product);
    }

    




}
