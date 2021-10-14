<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Products');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
                [
                    'id' => 1,
                    'price' => $faker->numberBetween(1, 10)*1000,
                    'name' => $faker->company
                ],
                [
                    'id' => 2,
                    'price' => $faker->numberBetween(1, 10)*1000,
                    'name' => $faker->company
                ],
                [
                    'id' => 3,
                    'price' => $faker->numberBetween(1, 10)*1000,
                    'name' => $faker->company
                ],
                [
                    'id' => 4,
                    'price' => $faker->numberBetween(1, 10)*1000,
                    'name' => $faker->company
                ],
                [
                    'id' => 5,
                    'price' => $faker->numberBetween(1, 10)*1000,
                    'name' => $faker->company
                ],
                [
                    'id' => 6,
                    'price' => $faker->numberBetween(1, 10)*1000,
                    'name' => $faker->company
                ],
                [
                    'id' => 7,
                    'price' => $faker->numberBetween(1, 10)*1000,
                    'name' => $faker->company
                ],
                [
                    'id' => 8,
                    'price' => $faker->numberBetween(1, 10)*1000,
                    'name' => $faker->company
                ],
                [
                    'id' => 9,
                    'price' => $faker->numberBetween(1, 10)*1000,
                    'name' => $faker->company
                ],
                [
                    'id' => 10,
                    'price' => $faker->numberBetween(1, 10)*1000,
                    'name' => $faker->company
                ]
            ]
        );


        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
