<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZonasEnvioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zonas_envios', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nombreZona', 60);
            $table->string('regionZona', 60);
            $table->string('metodosEnvio', 60);
            $table->float('costoZonaEnvio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zonas_envios');
    }
}
