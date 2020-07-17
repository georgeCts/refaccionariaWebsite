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
            $table->integer('brand_id')->unsigned();
            $table->string('name', 255);
            $table->text('description')->default('');
            $table->string('part_number', 100);
            $table->string('model', 100);

            $table->integer('created_pk_user')->unsigned();
            $table->datetime('created_at');
            $table->integer('updated_pk_user')->unsigned();
            $table->datetime('updated_at');

            $table->boolean('deleted')->default(0);
        });

        //FOREIGNS KEYS
        Schema::table('products', function($table) {
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('created_pk_user')->references('pk_user')->on('users');
            $table->foreign('updated_pk_user')->references('pk_user')->on('users');
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
