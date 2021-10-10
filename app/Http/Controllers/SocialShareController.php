<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialShareController extends Controller
{
    public function index()
    {
        $shareButtons = \Share::page(
            'Add url'
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()        
        ->reddit();
  
        //$posts = Post::get();
  
        return view('blog.blogDetails', compact('shareButtons'));
    }
}
