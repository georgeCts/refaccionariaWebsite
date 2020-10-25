<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
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
            $table->integer('brand_id')->nullable()->unsigned();
            $table->string('name', 255);
            $table->text('description')->nullable();
            $table->string('part_number', 100);
            $table->string('model', 100);
            $table->string('file', 128)->nullable();
            
            $table->timestamps();
            $table->boolean('deleted')->default(0);

            //FOREIGNS KEYS
            $table->foreign('brand_id')->references('id')->on('brands');
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
