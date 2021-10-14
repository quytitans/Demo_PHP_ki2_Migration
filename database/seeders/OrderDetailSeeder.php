<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrderDetailSeeder extends Seeder
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
        DB::table('order_details')->truncate();
        DB::table('order_details')->insert([
                [
                    'orderID' => $faker->numberBetween(1,10),
                    'productID' => $faker->numberBetween(1,10),
                    'quantity' => $faker->numberBetween(10,20),
                    'amount' => $faker->numberBetween(10, 100)*1000
                ],
                [
                    'orderID' => $faker->numberBetween(1,10),
                    'productID' => $faker->numberBetween(1,10),
                    'quantity' => $faker->numberBetween(10,20),
                    'amount' => $faker->numberBetween(10, 100)*1000
                ],
                [
                    'orderID' => $faker->numberBetween(1,10),
                    'productID' => $faker->numberBetween(1,10),
                    'quantity' => $faker->numberBetween(10,20),
                    'amount' => $faker->numberBetween(10, 100)*1000
                ],
                [
                    'orderID' => $faker->numberBetween(1,10),
                    'productID' => $faker->numberBetween(1,10),
                    'quantity' => $faker->numberBetween(10,20),
                    'amount' => $faker->numberBetween(10, 100)*1000
                ],
                [
                    'orderID' => $faker->numberBetween(1,10),
                    'productID' => $faker->numberBetween(1,10),
                    'quantity' => $faker->numberBetween(10,20),
                    'amount' => $faker->numberBetween(10, 100)*1000
                ],
                [
                    'orderID' => $faker->numberBetween(1,10),
                    'productID' => $faker->numberBetween(1,10),
                    'quantity' => $faker->numberBetween(10,20),
                    'amount' => $faker->numberBetween(10, 100)*1000
                ]
            ]
        );


        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
