<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) {
            $newBrand = new Brand();
            $newBrand->name=$faker->unique()->randomElement(['renault','citroen','ford','maserati','hummer']);
            $newBrand->save();
        }
    }
}
