<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
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
        DB::table('orders')->truncate();
        DB::table('orders')->insert([
                [
                    'id' => 1,
                    'customerID' => $faker->numberBetween(1,5),
                    'createdAt' => Carbon::now()->addDay(-1)
                ],
                [
                    'id' => 2,
                    'customerID' => $faker->numberBetween(1,5),
                    'createdAt' => Carbon::now()->addDay(-2)
                ],
                [
                    'id' => 3,
                    'customerID' => $faker->numberBetween(1,5),
                    'createdAt' => Carbon::now()->addDay(-3)
                ],
                [
                    'id' => 4,
                    'customerID' => $faker->numberBetween(1,5),
                    'createdAt' => Carbon::now()->addDay(-4)
                ],
                [
                    'id' => 5,
                    'customerID' => $faker->numberBetween(1,5),
                    'createdAt' => Carbon::now()->addDay(-5)
                ],
                [
                    'id' => 6,
                    'customerID' => $faker->numberBetween(1,5),
                    'createdAt' => Carbon::now()->addDay(-6)
                ],
                [
                    'id' => 7,
                    'customerID' => $faker->numberBetween(1,5),
                    'createdAt' => Carbon::now()->addDay(-7)
                ],
                [
                    'id' => 8,
                    'customerID' => $faker->numberBetween(1,5),
                    'createdAt' => Carbon::now()->addDay(-8)
                ],
                [
                    'id' => 9,
                    'customerID' => $faker->numberBetween(1,5),
                    'createdAt' => Carbon::now()->addDay(-9)
                ],
                [
                    'id' => 10,
                    'customerID' => $faker->numberBetween(1,5),
                    'createdAt' => Carbon::now()->addDay(-10)
                ]
            ]
        );


        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
