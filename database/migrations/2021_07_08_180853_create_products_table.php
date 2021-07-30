<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('productID', 100)->primary();
            $table->string('ProductSKU', 50);
            $table->string('ProductName', 100);
            $table->float('ProductPrice');
            $table->float('ProductWeight');
            $table->string('ProductCartDesc', 250);
            $table->string('ProductShortDesc', 1000);
            $table->text('ProductLongDesc');
            $table->string('ProductThumb', 200);
            $table->string('ProductImage', 200);
            $table->integer('ProductCategoryID');
            $table->timestamp('ProductUpdateDate');
            $table->float('ProductStock');
            $table->tinyInteger('ProductLive');
            $table->tinyInteger('ProductUnlimited');
            $table->string('ProductLocation', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
