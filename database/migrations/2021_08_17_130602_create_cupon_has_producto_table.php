<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuponHasProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupon_has_producto', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('idCupon');
            $table->integer('idProducto');
            $table->foreign('idCupon')->references('id')->on('cupon');
            $table->foreign('idProducto')->references('id')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cupon_has_producto');
    }
}