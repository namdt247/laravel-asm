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
        ]);
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
