<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Blog;
use App\Models\City;
use App\Models\Category;
use Image;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //show My Blogs (:
       if (Auth::check()) 
           $userBlog = User::where('id', Auth::id())->with('blogs')->first();
            return view('user.myBlogs',compact('userBlog'));
       
        return redirect("login")->withErrors('You are not allowed to access');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check())
        {
            $cities = City::get();
            $categories = Category::get();
            return view('blog.create',compact('cities','categories'));
        }
        else
        {
            return redirect("login")->withInfo('You have to login!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $user = Auth::user();
        $request->validate([
            'title' => 'required',
            'img'  => 'mimes:jpeg,jpg,png,gif|required|max:2048',
            'city_id' => 'required',
            'categories' => 'required',
            'description' => 'required',
        ]);
        
        if ($request->img) {
            
            $image = $request->file('img');
            $input['img'] = time().'.'.$image->getClientOriginalExtension();
            
            $destinationPath = public_path('/thumbnail');
    
            $imgFile = Image::make($image->getRealPath());
    
            $imgFile->fit(600 ,600 , function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save($destinationPath.'/'.$input['img']);
        }

        $blog = Blog::create([
            
            'title'=> $request->title,
            'img' => $input['img'] ?? $request->img,
            'city_id' => $request->city_id,
            'user_id' => $user->id,
            'description' => $request->description
        ]);

        $categories = $request->get('categories');
        foreach ($categories as $value) {
            $blog->refresh()->categories()->attach($value);
        }
        return redirect()->route("blogs.index")->withSuccess('You have created new blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::get();
        $blogCategory = $blog->categories()->pluck('category_id')->toArray();
        $recentBlogs = Blog::orderBy('created_at', 'desc')->take(5)->get();
        // social media
        // dd(url()->current());
        $shareButtons = \Share::page(
            url()->current(),
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()        
        ->reddit();

        return view('blog.blogDetails',compact('blog','categories','blogCategory','recentBlogs','shareButtons'));
    }

    // show recent blogs
    public function recentPosts(){
        Blog::orderBy('created_at', 'desc')->take(5)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
