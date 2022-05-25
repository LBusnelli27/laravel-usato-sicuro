<?php

use Illuminate\Database\Seeder;
use App\Color;
use App\Car;
use Faker\Generator as Faker;

class CarColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $cars = Car::all();
        $color_ids = Color::pluck('id')->toArray();

        foreach ($cars as $car) {
            $car->colors()->sync($faker->randomElements($color_ids, $faker->numberBetween(1,10)));
        }
    }
}
