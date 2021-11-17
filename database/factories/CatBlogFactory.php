<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog;
use App\Models\Category;

class CatBlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $blog = Blog::inRandomOrder()->first()->id;
        $category = Category::inRandomOrder()->first()->id;
    
        return [
            'blog_id'=> $blog,
            'category_id' =>$category,
        ];
    }
}
