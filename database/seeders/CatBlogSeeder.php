<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Blog;

class CatBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {

            $blog = Blog::inRandomOrder()->first()->id;
            $category = Category::inRandomOrder()->first()->id;
    
            DB::table('blog_category')->insert([
                'blog_id'=> $blog,
                'category_id' =>$category,
            ]);
        }
    }
}
