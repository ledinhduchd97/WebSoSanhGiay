<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand_code');
            $table->string('brand_name');
            $table->string('brand_icon');
            $table->integer('brand_id_user');
            $table->string('brand_description');
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
        Schema::dropIfExists('tbl_brands');
    }
}
