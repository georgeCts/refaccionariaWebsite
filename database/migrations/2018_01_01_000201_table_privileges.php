<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePrivileges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //TABLA PRIVILEGIOS_CATEGORIAS
        Schema::create('privileges', function(Blueprint $table) {
            $table->increments('pk_privilege');
            $table->integer('pk_privilege_category')->unsigned();
            $table->integer('parent_pk_privilege')->unsigned()->nullable();
            $table->string('privilege', 150)->unique();
            $table->string('tag', 120);

            $table->boolean('menu');
            $table->integer('menu_order')->nullable();
            $table->string('menu_url', 200)->nullable();
            $table->boolean('active');

        });


        //FOREIGNS KEYS
        Schema::table('privileges', function($table) {
            $table->foreign('pk_privilege_category')->references('pk_privilege_category')->on('privileges_categories');
        });


        DB::statement("INSERT INTO
            privileges
        (
            pk_privilege, pk_privilege_category, parent_pk_privilege, privilege, tag, 
            menu, menu_order, menu_url, active
        )
        VALUES
            (1, 1, NULL, 'SLIDERS', 'Lista de sliders',                     1, 1, 'sliders', 1),
            (2, 1, NULL, 'SLIDERS_CREAR', 'Crear slider',                   1, 2, 'sliders/crear', 1),

            (3, 2, NULL, 'BENEFICIOS', 'Lista de beneficios',               1, 1, 'beneficios', 1),
            (4, 2, NULL, 'BENEFICIOS_CREAR', 'Crear beneficios',            1, 2, 'beneficios/crear', 1),

            (5, 3, NULL, 'PRODUCTOS', 'Lista de productos',                 1, 1, 'productos', 1),
            (6, 3, NULL, 'PRODUCTOS_CREAR', 'Crear producto',               1, 2, 'productos/crear', 1),
            (7, 3, NULL, 'MARCAS', 'Lista de marcas',                       1, 3, 'marcas', 1),
            (8, 3, NULL, 'MARCAS_CREAR', 'Crear marca',                     1, 4, 'marcas/crear', 1),

            (9, 4, NULL, 'TIPS', 'Lista de tips',                           1, 1, 'tips', 1),
            (10, 4, NULL, 'TIPS_CREAR', 'Crear tips',                        1, 2, 'tips/crear', 1),

            (11, 5, NULL, 'SUCURSALES', 'Lista de sucursales',               1, 1, 'sucursales', 1),
            (12, 5, NULL, 'SUCURSALES_CREAR', 'Crear sucursal',              1, 2, 'sucursales/crear', 1),

            (13, 6, NULL, 'USUARIOS', 'Consultar',                          1, 1, 'usuarios', 1),
            (14, 6, NULL, 'USUARIOS_ROLES', 'Roles y Facultades',           1, 3, 'usuarios/roles', 1),
            
            (15, 7, NULL, 'BOLSA_TRABAJO', 'Lista de empleos',              1, 1, 'bolsa-trabajo', 1),
            (16, 7, NULL, 'BOLSA_TRABAJO_CREAR', 'Crear empleo',            1, 2, 'bolsa-trabajo/crear', 1);");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('privileges', function($table) {
            $table->dropForeign(['pk_privilege_category']);
        });
        
        Schema::dropIfExists('privileges');
    }
}
