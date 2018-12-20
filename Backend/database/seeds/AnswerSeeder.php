<?php

use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_products')->insert([
            'product_code' => 'AD111101',
            'product_name' => 'Ultra Boost',
            'product_id_brand' => 1,
            'product_price' => 150,
            'product_year_birth' =>'1998',
            'product_made_in' => 'Viet Nam',
            'product_weight' => '333 gms/ 11.74 Oz',
            'product_outsole' => 'Đế cao su Continental',
            'product_insole' => 'Đế xốp Boost',
            'product_toe' => 'Mũi nhọn',
            'product_tongue' =>'Lưỡi gà PRIMEKNIT, dày 1 cm',
            'product_vamp' => 'Thân dày trước PRIMEKNIT, dày 0.2 cm',
            'product_quater' => 'Thân dày sau PRIMEKNIT có nhựa dẻo, dày 1 cm',
            'product_lacing' => 'Mui giày Nhựa dẻo',
            'product_topline' => 'Cổ dày ôm, cổ có viền dày 1 cm',
            'product_shoelace' =>'Dây giày vải dệt, dày 0.3 cm',
            'product_lining' => 'Lớp lót da lộn tổng hợp đục lỗ',
            'product_technology' => 'Công nghệ Boost và dệt Primeknit',
            'product_id_user' => 1,
            'product_status' => 1,
            'product_image_total' => 'admin/images/BB6167_00_plp_standard.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
