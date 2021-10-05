<?php

namespace App\Http\Controllers\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\City;
use App\Models\Blog;
use Image;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-city');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uuid = Str::uuid()->toString();
        $this->validate($request, [
            'name' => 'required',
            'region' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $input['image'] = time().'.'.$image->getClientOriginalExtension();
        
        $destinationPath = public_path('/thumbnail');

        $imgFile = Image::make($image->getRealPath());

        $imgFile->fit(600 ,600 , function ($constraint) {
		    $constraint->aspectRatio();
		})
        ->save($destinationPath.'/'.$input['image']);

        $city = City::create([
            'id' => $uuid,
            'name'=> $request->name,
            'image' => $input['image'] ?? $request->image,
            'region' => $request->region,
        ]);
        return back()
        	->with('success','The city has successfully added.');
        	// ->with('fileName',$input['image']);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $city = City::findOrFail($id);
        $cityBlogs = $city->blogs;
        $recentBlogs = Blog::orderBy('created_at', 'desc')->take(5)->get();

        return view('blog.showBlogs',compact('city','cityBlogs','recentBlogs'));
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
