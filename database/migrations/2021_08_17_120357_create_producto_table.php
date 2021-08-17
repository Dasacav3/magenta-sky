<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nombre', 100);
            $table->string('sku', 100);
            $table->float('precio');
            $table->timestamp('fechaPublicacion')->nullable();
            $table->timestamp('fechaEdicion')->nullable();
            $table->string('descripcionCorta',255);
            $table->text('descripcionLarga');
            $table->text('imagen');
            $table->integer('idCategoria_producto');
            $table->integer('idOpciones_producto');
            $table->integer('idInventario');
            $table->foreign('idCategoria_producto')->references('id')->on('categoria_producto');
            $table->foreign('idOpciones_producto')->references('id')->on('opciones_producto');
            $table->foreign('idInventario')->references('id')->on('inventario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}