<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTips extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->text('body')->nullable();
            
            $table->integer('created_user_id')->unsigned();
            $table->datetime('created_at');
            $table->integer('updated_user_id')->unsigned();
            $table->datetime('updated_at');

            $table->boolean('deleted')->default(0);
        });

        //FOREIGNS KEYS
        Schema::table('tips', function($table) {
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
        Schema::dropIfExists('tips');
    }
}
