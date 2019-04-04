<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("order", function (Blueprint $table) {
            $table->increments("id");
            $table->integer("billing_id")->unsigned();
            $table->integer("product_id")->unsigned();
            $table->integer("user_id")->unsigned();
            $table->string("status");
            $table->integer("sub_product");
            $table->double("sub_amount");
            $table->string("payment_type");
            $table->timestamp("order_at")->useCurrent();

            $table->foreign("product_id")->references("id")->on("product_info")->onDelete("cascade");
            $table->foreign("billing_id")->references("id")->on("billing_address")->onDelete("cascade");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
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
