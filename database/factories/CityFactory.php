<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){
        return [
            'name' => 'Name',
            'region'=> 'Region',
            'image' => $this->faker->image('public', 400, 300, null, false),

        ];
    }
}
