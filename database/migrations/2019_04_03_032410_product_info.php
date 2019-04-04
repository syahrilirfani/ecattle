<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("product_info", function (Blueprint $table) {
            $table->increments("id");
            $table->string("product_name");
            $table->string("product_category");
            $table->double("product_price");
            $table->text("product_description");
            $table->double("product_rating");
            $table->integer("product_total");
            $table->integer("seller_id")->unsigned();

            $table->foreign("seller_id")->references("id")->on("seller")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
