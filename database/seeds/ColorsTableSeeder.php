<?php

use Illuminate\Database\Seeder;
use App\Color;
use Faker\Generator as Faker;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newColor = new Color();
            $newColor->color = $faker->unique()->hexColor();
            $newColor->save();
        }
    }
}
