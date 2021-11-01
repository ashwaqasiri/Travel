<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\City;
use App\Models\User;
use App\Models\Blog;
use App\Models\Category;

class BlogFactory extends Factory
{
    protected $model = Blog::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first()->id;
        $category = Category::inRandomOrder()->first()->id;
        $city = City::inRandomOrder()->first()->id;
    
        return [
            'user_id'=> $user,
            'title' => $this->faker->sentence,
            'img' => $this->faker->image('public\thumbnail', 500, 200, null, false),
            'description' => $this->faker->text(300),
            'city_id' =>$city,
        ];
    }
}
