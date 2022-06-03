<?php

namespace App\Http\Controllers;
//
//use App\Http\Requests\ProductsFilterRequest;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {

        return view('index');
    }

    public function about(){
        return view('about');
    }
}
