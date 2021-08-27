<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\App;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('provider_id')->nullable();
            $table->string('avatar')->default("/img/profile_photo/default.png");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->enum('rol', ['admin', 'customer'])->default('customer');
            $table->rememberToken();
            $table->string('telefonoCliente', '20')->nullable();
            $table->string('ciudad', 20)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->string('codigoPostal', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
