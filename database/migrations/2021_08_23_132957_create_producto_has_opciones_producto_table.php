<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoHasOpcionesProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_has_opciones_productos', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('idOpciones_producto');
            $table->integer('idProducto');
            $table->foreign('idOpciones_producto')->references('id')->on('opciones_productos');
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
        Schema::dropIfExists('producto_has_opciones_productos');
    }
}
