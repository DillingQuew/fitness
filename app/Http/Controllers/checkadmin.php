<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkadmin extends Controller
{
    public function index(Request $request)
    {
        if(checkadmin::find(0)->password==$request->password){
//            return view('order');
            return redirect('register');
        } else{
            return redirect('home');
        }

    }
}
