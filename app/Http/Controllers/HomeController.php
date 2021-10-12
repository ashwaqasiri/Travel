<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   $cities = City::all();
        $recentBlogs = Blog::with(['user','comments','categories'])->orderBy('created_at', 'desc')->take(3)->get();
        return view('home',compact('cities','recentBlogs'));
    }


}
