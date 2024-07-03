<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = [
            ['car_brand_id' => 1, 'car_model_id' => 1, 'year' => 2020, 'mileage' => 15000, 'color' => 'Red'],
            ['car_brand_id' => 1, 'car_model_id' => 2, 'year' => 2019, 'mileage' => 20000, 'color' => 'Blue'],
            ['car_brand_id' => 2, 'car_model_id' => 3, 'year' => 2018, 'mileage' => 25000, 'color' => 'Black'],
            ['car_brand_id' => 3, 'car_model_id' => 4, 'year' => 2021, 'mileage' => 10000, 'color' => 'White'],
            ['car_brand_id' => 3, 'car_model_id' => 5, 'year' => 2017, 'mileage' => 30000, 'color' => 'Grey'],
        ];

        foreach ($cars as $car) {
            DB::table('cars')->insert([
                'car_brand_id' => $car['car_brand_id'],
                'car_model_id' => $car['car_model_id'],
                'year' => $car['year'],
                'mileage' => $car['mileage'],
                'color' => $car['color'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
