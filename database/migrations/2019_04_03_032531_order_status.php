<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("order_status", function (Blueprint $table) {
            $table->increments("id");
            $table->integer("order_id")->unsigned();
            $table->string("status");
            $table->timestamp("paid_at")->nullable();
            $table->timestamp("sent_at")->nullable();
            $table->timestamp("delivered_at")->nullable();
            $table->timestamp("done_at")->nullable();

            $table->foreign("order_id")->references("id")->on("order")->onDelete("cascade");
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
