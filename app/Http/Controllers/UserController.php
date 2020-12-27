<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    //

    function login(Request $req)
    {
    	//return $req->input();
   	  
    	$user = USER::where(['email'=>$req->email])->first();

    	

    	if(!$user || !Hash::check($req->password,$user->password))
    	{
    		return "username or password is not match";
    	}

    	else
    	{
    		$req->session()->put('user',$user); 
    		return redirect('/');  
    		
    	
    	}
    }
    function register(Request $req)
    {
        $user = new User;
        $user ->name = $req->name;
        $user ->email = $req->email;
        $user ->password = Hash::make($req->password);
        $user ->save();
        return redirect("/login");
    	#return $req->input();
    }
 
}
     