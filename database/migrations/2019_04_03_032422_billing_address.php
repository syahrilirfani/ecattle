<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BillingAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("billing_address", function (Blueprint $table) {
            $table->increments("id");
            $table->integer("user_id")->unsigned();
            $table->string("fullname");
            $table->text("address");
            $table->text("address2");
            $table->string("city");
            $table->string("province");
            $table->string("postal_code");
            $table->string("phone_number");
            $table->string("email");
            $table->integer("shipping_id")->unsigned();
            $table->boolean("sameAsShipping");

            $table->foreign("shipping_id")->references("id")->on("shipping_address")->onDelete("cascade");
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
