<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        }
        \Illuminate\Support\Facades\DB::table('categories')->truncate();
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Bàn',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'Ghế',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Giường',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => 'Kệ',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => 'Gương',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'name' => 'Tủ',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'name' => 'Giá',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'name' => 'Bộ bàn ăn',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays()->format('Y-m-d H:i:s')
            ]
        ]);
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
