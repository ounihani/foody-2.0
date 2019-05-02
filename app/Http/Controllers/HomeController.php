<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Reviews;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $reviews = Reviews::all();
        return view('dashboard/home');
    }

    public function stores(){
        $stores=Store::all();
        return view('dashboard.stores.index')->with('stores',$stores);
    }
    public function reviews(){
        $reviews = Reviews::all();
        return view('dashboard.reviews.index')->with('reviews',$reviews);
    }
    public function notifications(){
        return view('dashboard.notifications.index');
    }


}
