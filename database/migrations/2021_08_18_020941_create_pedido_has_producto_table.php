<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoHasProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_has_producto', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('idPedido');
            $table->integer('idProducto');
            $table->integer('cantidad');
            $table->float('costo');
            $table->float('total');
            $table->foreign('idPedido')->references('id')->on('pedidos');
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
        Schema::dropIfExists('pedido_has_producto');
    }
}
