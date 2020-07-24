<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLocations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->text('address')->nullable();
            $table->string('latitude', 20)->nullable();
            $table->string('longitude', 20)->nullable();
            $table->text('more_info')->nullable();

            $table->integer('created_user_id')->unsigned();
            $table->datetime('created_at');
            $table->integer('updated_user_id')->unsigned();
            $table->datetime('updated_at');

            $table->boolean('deleted')->default(0);
        });

        //FOREIGNS KEYS
        Schema::table('locations', function($table) {
            $table->foreign('created_user_id')->references('id')->on('users');
            $table->foreign('updated_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
