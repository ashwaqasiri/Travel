<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        
        return view();
    }
    //
    public function create()
    {
        return view('admin.create-cat');
    }

    public function store(Request $request)
    {
        $uuid = Str::uuid()->toString();

        $this->validate($request, [
            'name' => 'required',
        ]);

        $city = Category::create([
            'id' => $uuid,
            'name'=> $request->name,
        ]);
        return back()->with('success','The category has successfully added.');
    
    }
}
