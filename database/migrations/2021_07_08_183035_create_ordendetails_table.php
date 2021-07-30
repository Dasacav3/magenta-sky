<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdendetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordendetails', function (Blueprint $table) {
            $table->string('DetailID',100)->primary();
            $table->string('DetailOrderID',100);
            $table->string('DetailProductID',100);
            $table->string('DetailName',250);
            $table->float('DetailPrice');
            $table->string('DetailSKU',50);
            $table->integer('DetailQuantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordendetails');
    }
}
