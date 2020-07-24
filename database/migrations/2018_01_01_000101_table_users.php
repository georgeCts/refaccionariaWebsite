<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //TABLA ADMINISTRADORES
        Schema::create('users', function(Blueprint $table) {
            
            $table->increments('id');
            $table->integer('user_type_id')->unsigned();
            $table->string('name', 100);
            $table->string('last_name', 100);
            $table->string('email', 150)->unique()->nullable();
            $table->string('profile_pic', 255)->default('avatar.jpg');
            
            /*** CONTROL DE ACCESO ***/
            $table->string('user', 150)->unique()->nullable();
            $table->string('password', 255)->nullable();
            $table->rememberToken();

            $table->integer('access_numb')->default(0);
            $table->datetime('last_access')->nullable();

            $table->integer('created_user_id')->unsigned();
            $table->datetime('created_at');

            $table->integer('updated_user_id')->unsigned();
            $table->datetime('updated_at');
            $table->boolean('deleted')->default(0);
        });

        //FOREIGNS KEYS
        Schema::table('users', function($table) {
            $table->foreign('user_type_id')->references('id')->on('users_types');
            $table->foreign('created_user_id')->references('id')->on('users');
            $table->foreign('updated_user_id')->references('id')->on('users');
        });

        //NEW ROW
        DB::statement("INSERT INTO
                users
            (
                id, 
                user_type_id, 
                name, 
                last_name, 
                email,
                user,
                password,
                created_user_id, 
                created_at, 
                updated_user_id, 
                updated_at, 
                deleted
            ) VALUES (
                1, 
                1, 
                'Jorge Luis', 
                'Cortes', 
                'georgeluis.idem@gmail.com',
                'admin',
                '" . bcrypt('123456') . "',
                1, 
                NOW(), 
                1, 
                NOW(), 
                0
            )");  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //FOREIGNS KEYS
        Schema::table('users', function($table) {
            $table->dropForeign(['user_type_id']);
            $table->dropForeign(['created_user_id']);
            $table->dropForeign(['updated_user_id']);
        });

        Schema::dropIfExists('users');
    }
}
