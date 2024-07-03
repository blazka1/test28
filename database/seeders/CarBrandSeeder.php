<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = ['Toyota', 'Ford', 'Honda', 'Chevrolet', 'Nissan'];

        foreach ($brands as $brand) {
            DB::table('car_brands')->insert([
                'name' => $brand,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
