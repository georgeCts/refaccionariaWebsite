<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableUsersTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //USERS TYPES TABLE
        Schema::create('users_types', function (Blueprint $table) {

            $table->increments('id');
            $table->string('user_type');
            $table->string('description')->default('');

            $table->integer('created_user_id')->unsigned();
            $table->datetime('created_at');
            $table->integer('updated_user_id')->unsigned();
            $table->datetime('updated_at');
            
            $table->boolean('deleted')->default(0);
        });

        //REGISTRO DE TIPOS DE USUARIOS
        DB::statement("INSERT INTO
            users_types
        (
            id, user_type, description, created_user_id, created_at, updated_user_id, updated_at, deleted
        )
            VALUES
        ( 1, 'Administrador', 'Administradores principales del sistema', 1, NOW(), 1, NOW(), 0), 
        ( 2, 'Monitor', 'Administradores de menor rango, solo pueden monitorear algunas caracteristicas.', 1, NOW(), 1, NOW(), 0)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_types');
    }
}
