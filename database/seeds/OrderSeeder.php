<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
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
        \Illuminate\Support\Facades\DB::table('orders')->truncate();
        \Illuminate\Support\Facades\DB::table('orders')->insert([
            [
                'id' => 1,
                'account_id' => 2,
                'od_code' => 'A001',
                'od_total_price' => 9786000,
                'ship_name' => 'Trường Thái Hoàn',
                'ship_address' => 'Số 390 Cầu Giấy, Hà Nội',
                'ship_email' => 'hoangtt@gmail.com',
                'ship_phone' => 0243112312,
                'od_note' => 'Giao hàng trong giờ hành chính',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays()->format('Y-m-d H:i:s'),
                'od_status' => 1,
            ],
            [
                'id' => 2,
                'account_id' => 3,
                'od_code' => 'A002',
                'od_total_price' => 15790000,
                'ship_name' => 'Trường Thái Hoàn',
                'ship_address' => 'Số 10 Toàn nhà ACB Trung Hòa Nhân Chính, Hà Nội',
                'ship_email' => 'hoangtt@gmail.com',
                'ship_phone' => 0243112312,
                'od_note' => 'Giao hàng trong giờ hành chính',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-5)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-4)->format('Y-m-d H:i:s'),
                'od_status' => 1,
            ],
            [
                'id' => 3,
                'account_id' => 4,
                'od_code' => 'A003',
                'od_total_price' => 7980000,
                'ship_name' => 'Trường Thái Hoàn',
                'ship_address' => 'Số 10 Đường Lê Văn Lương, Hà Nội',
                'ship_email' => 'hoangtt@gmail.com',
                'ship_phone' => 0243112312,
                'od_note' => 'Giao hàng trong giờ hành chính',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-4)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'od_status' => 1,
            ],
            [
                'id' => 4,
                'account_id' => 5,
                'od_code' => 'A004',
                'od_total_price' => 5490000,
                'ship_name' => 'Trường Thái Hoàn',
                'ship_address' => 'Số 223 Đội Cấn, Ba Đình, Hà Nội',
                'ship_email' => 'hoangtt@gmail.com',
                'ship_phone' => 0243112312,
                'od_note' => 'Giao hàng trong giờ hành chính',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'od_status' => 1,
            ],
            [
                'id' => 5,
                'account_id' => 6,
                'od_code' => 'A005',
                'od_total_price' => 3595000,
                'ship_name' => 'Trường Thái Hoàn',
                'ship_address' => 'Số 360 Ngô Quyền, Hà Đông, Hà Nội',
                'ship_email' => 'hoangtt@gmail.com',
                'ship_phone' => 0243112312,
                'od_note' => 'Giao hàng trong giờ hành chính',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-5)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-4)->format('Y-m-d H:i:s'),
                'od_status' => 1,
            ],
            [
                'id' => 6,
                'account_id' => 7,
                'od_code' => 'A006',
                'od_total_price' => 15890000,
                'ship_name' => 'Trường Thái Hoàn',
                'ship_address' => 'Số 10 Toàn nhà ACB Trung Hòa Nhân Chính, Hà Nội',
                'ship_email' => 'hoangtt@gmail.com',
                'ship_phone' => 0243112312,
                'od_note' => 'Giao hàng trong giờ hành chính',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-4)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-4)->format('Y-m-d H:i:s'),
                'od_status' => 1,
            ],
            [
                'id' => 7,
                'account_id' => 8,
                'od_code' => 'A007',
                'od_total_price' => 10488000,
                'ship_name' => 'Trường Thái Hoàn',
                'ship_address' => 'Số 233 Hoàng Mai, Hà Nội',
                'ship_email' => 'hoangtt@gmail.com',
                'ship_phone' => 0243112312,
                'od_note' => 'Giao hàng trong giờ hành chính',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'od_status' => 1,
            ],
            [
                'id' => 8,
                'account_id' => 9,
                'od_code' => 'A008',
                'od_total_price' => 15476000,
                'ship_name' => 'Trường Thái Hoàn',
                'ship_address' => 'Số 300 Liễu Giai, Ba Đình, Hà Nội',
                'ship_email' => 'hoangtt@gmail.com',
                'ship_phone' => 0243112312,
                'od_note' => 'Giao hàng trong giờ hành chính',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'od_status' => 1,
            ]
        ]);
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
