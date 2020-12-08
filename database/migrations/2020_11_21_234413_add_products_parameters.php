<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductsParameters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('brand_model_id')->nullable()->unsigned();
            $table->integer('product_year_id')->nullable()->unsigned();
            $table->integer('product_engine_id')->nullable()->unsigned();

            $table->foreign('brand_model_id')->references('id')->on('brands_models');
            $table->foreign('product_year_id')->references('id')->on('products_years');
            $table->foreign('product_engine_id')->references('id')->on('products_engines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
