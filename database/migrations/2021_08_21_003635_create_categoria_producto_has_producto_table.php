<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaProductoHasProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_producto_has_productos', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->bigInteger('idCategoria_producto');
            $table->bigInteger('idProducto');
            $table->foreign('idCategoria_producto')->references('id')->on('categoria_productos');
            $table->foreign('idProducto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_producto_has_productos');
    }
}
