<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_brands')->insert([
            'brand_code' => 'ADI',
            'brand_name' => 'Adidas',
            'brand_icon' => 'admin/images/logoadidas.jpg',
            'brand_id_user' => '1',
            'brand_description' =>'abc',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('tbl_brands')->insert([
            'brand_code' => 'NI',
            'brand_name' => 'NIKE',
            'brand_icon' => 'admin/images/logonike.jpg',
            'brand_id_user' => '1',
            'brand_description' =>'abc',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('tbl_brands')->insert([
            'brand_code' => 'CON',
            'brand_name' => 'Converse',
            'brand_icon' => 'admin/images/logoconverse.jpg',
            'brand_id_user' => '1',
            'brand_description' =>'abc',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('tbl_brands')->insert([
            'brand_code' => 'Vans',
            'brand_name' => 'VA',
            'brand_icon' => 'admin/images/logovans.jpg',
            'brand_id_user' => '1',
            'brand_description' =>'abc',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
