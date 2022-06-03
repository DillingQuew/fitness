<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        return view('order');
    }
    public function store(Request $request)
    {
        $post = new Order;
        $post->name = $request->name;
        $post->phone = $request->phone;
        $post->save();
        return view('index')->with('status', 'Blog Post Form Data Has Been inserted');
    }
    public function home(){
        if (Auth::user()->isAdmin()) {
            return view('index');
        } else {
            return route('person.orders.index');
        }
    }
}
