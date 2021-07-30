<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productoptions', function (Blueprint $table) {
            $table->id('productOptionID');
            $table->string('productID',100);
            $table->integer('optionID');
            $table->float('optionPriceIncrement');
            $table->integer('optionOptionID');
            $table->foreign('productID')->references('productID')->on('products');
            $table->foreign('optionID')->references('optionID')->on('options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productoptions');
    }
}
