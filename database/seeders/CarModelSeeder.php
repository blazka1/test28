<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carModels = [
            ['name' => 'Corolla', 'car_brand_id' => 1],
            ['name' => 'Camry', 'car_brand_id' => 1],
            ['name' => 'Mustang', 'car_brand_id' => 2],
            ['name' => 'Civic', 'car_brand_id' => 3],
            ['name' => 'Accord', 'car_brand_id' => 3],
        ];

        foreach ($carModels as $model) {
            DB::table('car_models')->insert([
                'name' => $model['name'],
                'car_brand_id' => $model['car_brand_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
