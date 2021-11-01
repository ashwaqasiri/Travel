<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Art and Culture', 'History', 'Food and Drink' , 'Photography','Seaside','Wildlife and Nature'];

        foreach($categories as $category) {
            Category::factory()->Create([
            'name' => $category,
        ]);
        }
    }
}
