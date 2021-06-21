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
            $table->id();
            $table->string('name');
            $table->string('productCode');
            $table->integer('quantity');
            $table->float('price');
            $table->string('model');
            $table->timestamps();
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->foreign('category_id')->references('id')->on('categories')
            ->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')
            ->onDelete('cascade');
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