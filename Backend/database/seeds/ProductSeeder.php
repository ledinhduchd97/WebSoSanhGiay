<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ProductSeeder extends Seeder
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
        DB::table('tbl_products')->insert([
            'product_code' => 'AD222201',
            'product_name' => 'NMD Boost',
            'product_id_brand' => 1,
            'product_price' => 200,
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
            'product_image_total' => 'admin/images/AQ1119_00_plp_standard.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('tbl_products')->insert([
            'product_code' => 'AD333301',
            'product_name' => 'EQT Boost',
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
            'product_image_total' => 'admin/images/B28133_00_plp_standard.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('tbl_products')->insert([
            'product_code' => 'AD444401',
            'product_name' => 'EQT Classic',
            'product_id_brand' => 1,
            'product_price' => 200,
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
            'product_status' => 0,
            'product_image_total' => 'admin/images/BB7177_00_plp_standard.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('tbl_products')->insert([
            'product_code' => 'AD444401',
            'product_name' => 'Alphabounce Instinct Shoes',
            'product_id_brand' => 2,
            'product_price' => 180,
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
            'product_status' => 0,
            'product_image_total' => 'admin/images/alphabounce-instinct-shoes.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('tbl_products')->insert([
            'product_code' => 'AD444401',
            'product_name' => 'Adizero-XT-Boost',
            'product_id_brand' => 1,
            'product_price' => 180,
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
            'product_status' => 0,
            'product_image_total' => 'admin/images/adidas-x-undefeated-adizero-xt-boost-shoes.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('tbl_products')->insert([
            'product_code' => 'AD444401',
            'product_name' => 'Ultraboost Mid Shoes',
            'product_id_brand' => 1,
            'product_price' => 180,
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
            'product_status' => 0,
            'product_image_total' => 'admin/images/ultraboost-mid-shoes.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('tbl_products')->insert([
            'product_code' => 'AD444401',
            'product_name' => 'Ultraboost Mid Shoes',
            'product_id_brand' => 1,
            'product_price' => 180,
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
            'product_status' => 0,
            'product_image_total' => 'admin/images/ultraboost-mid-shoes.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('tbl_products')->insert([
            'product_code' => 'AD444401',
            'product_name' => 'Solar Glide Shoes',
            'product_id_brand' => 2,
            'product_price' => 180,
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
            'product_status' => 0,
            'product_image_total' => 'admin/images/solar-glide-shoes.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}