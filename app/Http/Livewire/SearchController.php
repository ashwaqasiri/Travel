<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
class SearchController extends Component
{
    public $search;
    public $blog_id;

    public function updateSearch($blog_id, $blog_title)
    {
        $this->blog_id = $blog_id;
        $this->search = $blog_title;
    }
    
    public function render()
    {
        $blogs = [];
        if (strlen($this->search) >= 1) {
        $search = '%'.$this->search.'%';
        $blogs = Blog::where('title','like', $search)->take(5)->get();
        }
        return view('livewire.search-controller',[
            'blogs' => $blogs
        ]);
    }
}
