<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //


    // cookie 设置
    public function set()
    {
    	// setcookie('name','yaojin',time() + 3600, '/');
    	// \Cookie::queue('name','yaojin',10);
    	 // return response('响应')->withCookie('class','2',4);
    	 // 
    	 return 'aaa';
    }

    public function response()
    {
    	// return 'hahahha';
    	// return response()->json(['a'=>100,'b'=>200]);
    	// return response()->download('1.png');
    	return redirect('set');
    }
}

