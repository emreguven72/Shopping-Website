<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CartProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_product', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('cart_id');
            $table->foreign('product_id')->references('id')->on('products')->cascadeOnDelete();
            $table->foreign('cart_id')->references('id')->on('carts')->cascadeOnDelete();
            $table->primary(['product_id', 'cart_id']);
            $table->unique(['product_id', 'cart_id']);
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
