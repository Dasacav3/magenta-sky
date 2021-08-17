<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nombreCliente', '60');
            $table->string('telefonoCliente', '20')->nullable();
            $table->string('ciudad', 20)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->string('codigoPostal', 100)->nullable();
            $table->integer('idUser');
            $table->foreign('idUser')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
