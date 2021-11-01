<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
  
          //$faker->image('public\thumbnail', 400, 300, null, false),
        $cities = ['Abha', 'Riyadh', 'Jeddah' , 'Alula'];
        $regions = ['South','Eastern','western','North'];
                City::factory()->Create([
                'name' => 'Abha',
                'region'=> 'South',
                'image' => 'Abha-city-1.jpg'
                ]);
                City::factory()->Create([
                    'name' => 'Riyadh',
                    'region'=> 'Eastern',
                    'image' => 'riyadh-city.jpg'
                ]);
                City::factory()->Create([
                    'name' => 'Jeddah',
                    'region'=> 'Western',
                    'image' => 'jeddah.jpg'
                ]);
                City::factory()->Create([
                    'name' => 'Alula',
                    'region'=> 'North',
                    'image' => 'alula-city.jpg'
                ]);
    
    }
}
