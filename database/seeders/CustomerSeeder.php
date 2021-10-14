<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
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
        DB::table('customers')->truncate();
        DB::table('customers')->insert([
                [
                    'id' => 1,
                    'name' => $faker->name,
                    'address' => $faker->address
                ],
                [
                    'id' => 2,
                    'name' => $faker->name,
                    'address' => $faker->address
                ],
                [
                    'id' => 3,
                    'name' => $faker->name,
                    'address' => $faker->address
                ],
                [
                    'id' => 4,
                    'name' => $faker->name,
                    'address' => $faker->address
                ],
                [
                    'id' => 5,
                    'name' => $faker->name,
                    'address' => $faker->address
                ]
            ]
        );


        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
