<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePrivilegesCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //TABLA PRIVILEGIOS_CATEGORIAS
        Schema::create('privileges_categories', function(Blueprint $table) {
            $table->increments('pk_privilege_category');
            $table->string('privilege_category', 80)->unique();
            $table->integer('menu_order')->nullable();
            $table->string('menu_icon', 100)->nullable();
        });



        //NEW ROW
        DB::statement("INSERT INTO
            privileges_categories
        (
            pk_privilege_category, privilege_category, menu_order, menu_icon
        )
        VALUES
            (1, 'Sliders', 1, 'mdi-image'),
            (2, 'Beneficios', 2, 'mdi-cards'),
            (3, 'Productos', 3, 'mdi-basket'),
            (4, 'Tips', 4, 'mdi-emoticon-excited'),
            (5, 'Sucursales', 5, 'mdi-map-maker'),
            (6, 'Usuarios', 7, 'mdi-account-multiple'),
            (7, 'Bolsa de trabajo', 6, 'mdi-briefcase')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('privileges_categories');
    }
}
