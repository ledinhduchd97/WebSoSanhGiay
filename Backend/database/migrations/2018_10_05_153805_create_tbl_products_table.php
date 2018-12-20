<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_code'); //ma
            $table->string('product_name'); //tên
            $table->integer('product_id_brand'); //hãng
            $table->double('product_price'); //giá
            $table->string('product_year_birth'); //năm ra đời
            $table->string('product_made_in'); //sản xuất tại
            $table->string('product_weight'); //cân nặng
            $table->string('product_outsole'); //đế ngoài
            $table->string('product_insole'); //đế trong
            $table->string('product_toe'); //mũi giày
            $table->string('product_tongue'); //lưỡi gà
            $table->string('product_vamp'); //thân giày trước
            $table->string('product_quater'); //thân giày sau
            $table->string('product_lacing'); //mui giày
            $table->string('product_topline'); //cổ giày
            $table->string('product_shoelace'); //dây giày
            $table->string('product_lining'); //miếng lót
            $table->string('product_technology'); //công nghệ
            $table->integer('product_id_user')->nullable();
            $table->integer('product_status');
            $table->string('product_image_total')->nullable();
            $table->string('product_image_top')->nullable();
            $table->string('product_image_left')->nullable();
            $table->string('product_image_right')->nullable();
            $table->string('product_image_with_model')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_products');
    }
}
