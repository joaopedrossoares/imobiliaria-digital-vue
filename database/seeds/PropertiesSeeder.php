<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Property');
        
        for($i = 1 ; $i <= 100 ; $i++){
        	DB::table('properties')->insert([
                'title' => $faker->sentence(),
                'price' => $faker->randomNumber(5),
                'featured' => $faker->randomDigit(),
                'purpose' => 'rent',
                'type' =>'house',
                'image' => $faker->imageUrl(),
                'slug' =>  $faker->sentence(),
                'bedroom' => $faker->randomDigit(),
                'bathroom' => $faker->randomDigit(),
                'city' => $faker->city(),
                'city_slug' => $faker->stateAbbr(),
                'address' => $faker->streetAddress(),
                'area' => $faker->randomDigit(),
                'agent_id' => $faker->randomDigit(),
                'description' => $faker->sentence(),
                'video' => $faker->url(),
                'floor_plan' => $faker->url(),   
                'location_latitude' => $faker->latitude(),
                'location_longitude' => $faker->longitude(),
                'nearby' => $faker->cityPrefix()
                
            ]);
        }
    }
}
