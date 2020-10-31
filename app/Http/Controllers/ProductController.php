<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Cart;

use App\Models\Order;

use Illuminate\Support\Facades\DB;


use Session;

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
    function addToCart(Request $req)
    {
    	

    	if($req->session()->has('user'))
    	{
    		$cart = new Cart;
    		$cart->user_id=$req->session()->get('user')['id'];
    		$cart->product_id=$req->product_id;
    		$cart->save();
    		return redirect('/');
    	}
    	else
    	{
    		return redirect('/login');
    	}
    }
    static function cartItem()
    {
    	$userId=Session::get('user')['id'];
    	return Cart::where('user_id',$userId)->count();
    }
    function cartList()
    {
    	$userId=Session::get('user')['id'];
    	$data = DB::table('cart')
    	->join('Products','cart.product_id','products.id')
    	->select('products.*','cart.id as cart_id')
    	->where('cart.user_id',$userId)
    	->get();
    	return view('cartlist',['products'=>$data]);
    }

    function removeCart($id)
    {
    	Cart::destroy($id);
    	return redirect('cartlist');
    }
    function ordernow()
    {
    	$userId=Session::get('user')['id'];
    	$total = DB::table('cart')
    	->join('Products','cart.product_id','products.id')
    	->where('cart.user_id',$userId)
    	->sum('products.price');
    	return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
       $userId=Session::get('user')['id'];
       $allCart=Cart::where('user_Id',$userId)->get();
       foreach ($allCart as $cart) 
       {
           $order = new Order;
           $order->product_id=$cart['product_id'];
           $order->user_id=$cart['user_id'];
           $order->address=$req->address;
           $order->status="panding";
           $order->payment_method=$req->Payment;
           $order->payment_status="padding";
           $order->save();


       }
        Cart::where('user_Id',$userId)->delete();
        return redirect("/");

       //return $req->input();

    }
    function  myOrder()
    {
    	 $userId=Session::get('user')['id'];
    	$orders = DB::table('orders')
    	->join('Products','orders.product_id','products.id')
    	->where('orders.user_id',$userId)
    	->get();
    	return view('myorder',['orders'=>$orders]);
    
    }


}
  