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
            $table->bigInteger('id')->autoIncrement();
            $table->string('nombre', 100);
            $table->string('sku', 100)->unique();
            $table->float('precio', 20, 2);
            $table->integer('stock');
            $table->integer('cantidad');
            $table->timestamp('fechaPublicacion')->nullable();
            $table->timestamp('fechaEdicion')->nullable();
            $table->string('descripcionCorta', 255);
            $table->text('descripcionLarga');
            $table->text('imagen');
            $table->enum('estado_stock', ['Disponible', 'Agotado', 'Pedido realizado'])->default('Disponible');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
