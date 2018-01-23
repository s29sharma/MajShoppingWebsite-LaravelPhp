<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->timestamps();
            $table->string('Product_name');
            $table->string('Product_category');
            $table->string('Product_brand');
            $table->string('Product_description');
            $table->string('Product_specification');
            $table->string('Product_warranty');
            $table->string('Product_shippingcost');
            $table->integer('supplier_id');
            $table->integer('Product_price');
            $table->integer('Product_discount');
            $table->integer('Product_instock');
            $table->string('Product_color');
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
