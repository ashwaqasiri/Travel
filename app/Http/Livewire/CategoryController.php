<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Blog;

class CategoryController extends Component
{
    public $categories;
    public $blogs = [];


    public function mount()
    {
        $this->categories = Category::get();
        $this->blogs = Blog::take(8)->latest()->get();
    }

    public function getAll()
    {
        $this->blogs = Blog::take(8)->latest()->get();
    }

    public function getBlogs(Category $category)
    {
        $this->blogs = $category->blogs;
    }

    public function render()
    {
        return view('livewire.category-controller');
    }
}
