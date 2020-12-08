<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePromotions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 150);
            $table->text('body')->nullable();
            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('DRAFT');
            $table->string('file', 128)->nullable();
            $table->boolean('is_promotion')->default(0);

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
        Schema::dropIfExists('promotions');
    }
}
