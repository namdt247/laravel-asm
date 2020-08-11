<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
        \Illuminate\Support\Facades\DB::table('accounts')->truncate();
        \Illuminate\Support\Facades\DB::table('accounts')->insert([
            [
                'id' => 1,
                'username' => 'anhvt',
                'salt' => 'abcdef',
                'password_hash' => '123456',
                'full_name' => 'Vu Tuan Anh',
                'role' => 'user',
                'status' => 1
            ],
            [
                'id' => 2,
                'username' => 'anhvt1',
                'salt' => 'abcdef',
                'password_hash' => '123456',
                'full_name' => 'Vu Tuan Anh',
                'role' => 'user',
                'status' => 1
            ]
        ]);
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
