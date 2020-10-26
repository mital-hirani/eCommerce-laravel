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
}
