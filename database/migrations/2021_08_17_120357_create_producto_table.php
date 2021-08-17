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
        Schema::create('productos', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nombre', 100);
            $table->string('sku', 100);
            $table->float('precio');
            $table->integer('stock');
            $table->integer('cantidad');
            $table->timestamp('fechaPublicacion')->nullable();
            $table->timestamp('fechaEdicion')->nullable();
            $table->string('descripcionCorta',255);
            $table->text('descripcionLarga');
            $table->text('imagen');
            $table->integer('idCategoria_producto');
            $table->integer('idOpciones_producto');
            $table->foreign('idCategoria_producto')->references('id')->on('categoria_productos');
            $table->foreign('idOpciones_producto')->references('id')->on('opciones_productos');
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
