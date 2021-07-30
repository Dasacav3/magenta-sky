<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->string('userId', 100)->primary();
            $table->string('userEmail', 100)->unique();
            $table->string('userPassword', 100);
            $table->string('userFirstName', 60);
            $table->string('userLastName', 60);
            $table->string('userCity', 60);
            $table->string('userState', 60);
            $table->string('userZip', 12);
            $table->enum('userEmailVerified', ['Yes', 'No']);
            $table->string('userVerificationCode', 20)->unique();
            $table->string('userPhone', 20)->unique();
            $table->string('userAddress', 100);
            $table->timestamp('userRegitrationDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
