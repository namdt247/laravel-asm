<?php

use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        }
        \Illuminate\Support\Facades\DB::table('order_details')->truncate();
        \Illuminate\Support\Facades\DB::table('order_details')->insert([
            [
                'od_id' => 1,
                'product_id' => 1,
                'od_quantity' => 1,
                'od_unit_price' => 6990000,
            ],
            [
                'od_id' => 1,
                'product_id' => 21,
                'od_quantity' => 4,
                'od_unit_price' => 699000,
            ],
            [
                'od_id' => 2,
                'product_id' => 16,
                'od_quantity' => 1,
                'od_unit_price' => 12900000,
            ],
            [
                'od_id' => 2,
                'product_id' => 11,
                'od_quantity' => 1,
                'od_unit_price' => 2890000,
            ],
            [
                'od_id' => 3,
                'product_id' => 17,
                'od_quantity' => 1,
                'od_unit_price' => 3990000,
            ],
            [
                'od_id' => 3,
                'product_id' => 41,
                'od_quantity' => 1,
                'od_unit_price' => 3990000,
            ],
            [
                'od_id' => 4,
                'product_id' => 18,
                'od_quantity' => 1,
                'od_unit_price' => 5490000,
            ],
            [
                'od_id' => 5,
                'product_id' => 25,
                'od_quantity' => 4,
                'od_unit_price' => 749000,
            ],
            [
                'od_id' => 5,
                'product_id' => 26,
                'od_quantity' => 1,
                'od_unit_price' => 599000,
            ],
            [
                'od_id' => 6,
                'product_id' => 16,
                'od_quantity' => 1,
                'od_unit_price' => 12900000,
            ],
            [
                'od_id' => 6,
                'product_id' => 15,
                'od_quantity' => 1,
                'od_unit_price' => 2990000,
            ],
            [
                'od_id' => 7,
                'product_id' => 18,
                'od_quantity' => 1,
                'od_unit_price' => 5490000,
            ],
            [
                'od_id' => 7,
                'product_id' => 40,
                'od_quantity' => 1,
                'od_unit_price' => 4998000,
            ],
            [
                'od_id' => 8,
                'product_id' => 45,
                'od_quantity' => 1,
                'od_unit_price' => 7990000,
            ],
            [
                'od_id' => 8,
                'product_id' => 19,
                'od_quantity' => 1,
                'od_unit_price' => 5490000,
            ],
            [
                'od_id' => 8,
                'product_id' => 24,
                'od_quantity' => 4,
                'od_unit_price' => 499000,
            ],
            [
                'od_id' => 9,
                'product_id' => 31,
                'od_quantity' => 1,
                'od_unit_price' => 3990000,
            ],
            [
                'od_id' => 9,
                'product_id' => 35,
                'od_quantity' => 1,
                'od_unit_price' => 3990000,
            ],
            [
                'od_id' => 10,
                'product_id' => 70,
                'od_quantity' => 1,
                'od_unit_price' => 2060000,
            ],
            [
                'od_id' => 10,
                'product_id' => 72,
                'od_quantity' => 1,
                'od_unit_price' => 999000,
            ],
            [
                'od_id' => 10,
                'product_id' => 27,
                'od_quantity' => 1,
                'od_unit_price' => 2490000,
            ],
            [
                'od_id' => 11,
                'product_id' => 81,
                'od_quantity' => 1,
                'od_unit_price' => 1590000,
            ],
            [
                'od_id' => 11,
                'product_id' => 40,
                'od_quantity' => 1,
                'od_unit_price' => 4998000,
            ],
            [
                'od_id' => 11,
                'product_id' => 20,
                'od_quantity' => 1,
                'od_unit_price' => 4490000,
            ],
            [
                'od_id' => 12,
                'product_id' => 59,
                'od_quantity' => 1,
                'od_unit_price' => 18400000,
            ],
            [
                'od_id' => 11,
                'product_id' => 51,
                'od_quantity' => 1,
                'od_unit_price' => 499000,
            ],
            [
                'od_id' => 12,
                'product_id' => 79,
                'od_quantity' => 1,
                'od_unit_price' => 740000,
            ],
            [
                'od_id' => 13,
                'product_id' => 73,
                'od_quantity' => 1,
                'od_unit_price' => 999000,
            ],
            [
                'od_id' => 13,
                'product_id' => 66,
                'od_quantity' => 4,
                'od_unit_price' => 1600000,
            ],
            [
                'od_id' => 13,
                'product_id' => 9,
                'od_quantity' => 1,
                'od_unit_price' => 1490000,
            ],
            [
                'od_id' => 14,
                'product_id' => 60,
                'od_quantity' => 1,
                'od_unit_price' => 6400000,
            ],
            [
                'od_id' => 14,
                'product_id' => 43,
                'od_quantity' => 1,
                'od_unit_price' => 7490000,
            ],
            [
                'od_id' => 14,
                'product_id' => 45,
                'od_quantity' => 1,
                'od_unit_price' => 7990000,
            ],
            [
                'od_id' => 15,
                'product_id' => 49,
                'od_quantity' => 1,
                'od_unit_price' => 4990000,
            ],
            [
                'od_id' => 15,
                'product_id' => 55,
                'od_quantity' => 1,
                'od_unit_price' => 4790000,
            ],
            [
                'od_id' => 15,
                'product_id' => 65,
                'od_quantity' => 4,
                'od_unit_price' => 799000,
            ],
            [
                'od_id' => 15,
                'product_id' => 69,
                'od_quantity' => 4,
                'od_unit_price' => 2690000,
            ],
            [
                'od_id' => 16,
                'product_id' => 61,
                'od_quantity' => 4,
                'od_unit_price' => 16400000,
            ],
            [
                'od_id' => 16,
                'product_id' => 37,
                'od_quantity' => 4,
                'od_unit_price' => 4990000,
            ],
            [
                'od_id' => 16,
                'product_id' => 18,
                'od_quantity' => 4,
                'od_unit_price' => 5490000,
            ],
            [
                'od_id' => 17,
                'product_id' => 29,
                'od_quantity' => 4,
                'od_unit_price' => 799000,
            ],
            [
                'od_id' => 17,
                'product_id' => 23,
                'od_quantity' => 8,
                'od_unit_price' => 899000,
            ],
            [
                'od_id' => 18,
                'product_id' => 5,
                'od_quantity' => 1,
                'od_unit_price' => 1990000,
            ],
            [
                'od_id' => 18,
                'product_id' => 14,
                'od_quantity' => 1,
                'od_unit_price' => 2890000,
            ],
            [
                'od_id' => 18,
                'product_id' => 18,
                'od_quantity' => 1,
                'od_unit_price' => 5490000,
            ],
            [
                'od_id' => 18,
                'product_id' => 21,
                'od_quantity' => 4,
                'od_unit_price' => 699000,
            ],
            [
                'od_id' => 19,
                'product_id' => 40,
                'od_quantity' => 1,
                'od_unit_price' => 4998000,
            ],
            [
                'od_id' => 19,
                'product_id' => 17,
                'od_quantity' => 1,
                'od_unit_price' => 3990000,
            ],
            [
                'od_id' => 19,
                'product_id' => 10,
                'od_quantity' => 1,
                'od_unit_price' => 2490000,
            ],
            [
                'od_id' => 20,
                'product_id' => 69,
                'od_quantity' => 1,
                'od_unit_price' => 2690000,
            ],
            [
                'od_id' => 20,
                'product_id' => 75,
                'od_quantity' => 1,
                'od_unit_price' => 809000,
            ],
            [
                'od_id' => 20,
                'product_id' => 26,
                'od_quantity' => 1,
                'od_unit_price' => 599000,
            ],
            [
                'od_id' => 20,
                'product_id' => 25,
                'od_quantity' => 4,
                'od_unit_price' => 749000,
            ],
        ]);
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
