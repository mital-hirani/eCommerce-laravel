<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    //
    function index()
    {
    	//return "welcome to  product page";
    	//return Product::all();
    	$data=Product::all();
    	return view('product',['products'=>$data]);
    }
    function detail($id)
    {
    	$data= Product::find($id);
    	return view("detail",['product'=>$data]);
    }
    function search(Request $req)
    {
    	//return $req->input();
    	 $data=Product::where('name','like','%'.$req->input('query').'%')->get();
    	//$data=Product::where('name',$req->input('query'))->get();
    	return view('search',['products'=>$data]);

    }
}
