<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->timestamp('fechaCreacion')->nullable();
            $table->enum('estadoPedido', ['procesando', 'pendiente_pago', 'en_espera', 'completado', 'cancelado', 'reembolso','fallido']);
            $table->string('direccionEnvio', 100)->nullable();
            $table->text('notasPedido')->nullable();
            $table->integer('idCliente');
            $table->integer('idMetodo_pago');
            $table->integer('idZonas_envio');
            $table->integer('idProducto');
            $table->foreign('idCliente')->references('id')->on('users');
            $table->foreign('idMetodo_pago')->references('id')->on('metodo_pagos');
            $table->foreign('idZonas_envio')->references('id')->on('zonas_envios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
