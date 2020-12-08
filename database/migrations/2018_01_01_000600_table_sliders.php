<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSliders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {

            $table->increments('id');

            $table->string('title', 128)->nullable();
            $table->text('body')->nullable();
            $table->string('url_redirect', 128)->nullable();
            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('DRAFT');

            $table->string('file', 128);

            $table->timestamps();
            $table->boolean('deleted')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}
