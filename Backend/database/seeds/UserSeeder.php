<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_name' => 'Lê Đình Đức',
            'email' => 'ledinhduchd97@gmail.com',
            'password' => Hash::make('123456'),
            'user_level' => '1',
            'user_status' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'user_name' => 'Lê Đình A',
            'email' => 'ledinhduc@gmail.com',
            'password' => Hash::make('123456'),
            'user_level' => '2',
            'user_status' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
