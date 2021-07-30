<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->string('OrderID',100)->primary();
            $table->string('OrderUserID',100);
            $table->float('OrderAmount');
            $table->string('OrderShipName',100);
            $table->string('OrderShipAddress',100);
            $table->string('OrderShipAddress2',100);
            $table->string('OrderCity',50);
            $table->string('OrderState',50);
            $table->string('OrderZip',20);
            $table->string('OrderCountry',50);
            $table->string('OrderPhone',20);
            $table->float('OrderShipping');
            $table->string('OrderEmail',100);
            $table->timestamp('OrderDate');
            $table->enum('OrderShipped',['Yes','No']);
            $table->string('OrderTrackingNumber',80);
            $table->foreign('OrderUserID')->references('userID')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
