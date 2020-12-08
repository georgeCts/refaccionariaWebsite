<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestigeBrands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestige_brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('file', 128);
            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('DRAFT');

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
        Schema::dropIfExists('prestige_brands');
    }
}
