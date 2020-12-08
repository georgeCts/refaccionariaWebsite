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
            $table->string('name', 100);
            $table->string('last_name', 100);
            $table->string('email', 150)->unique()->nullable();
            
            /*** CONTROL DE ACCESO ***/
            $table->string('user', 150)->unique()->nullable();
            $table->string('password', 255)->nullable();
            $table->rememberToken();

            $table->datetime('last_access')->nullable();
            $table->timestamps();
            $table->boolean('deleted')->default(0);
        });

        //NEW ROW
        DB::statement("INSERT INTO
                users
            (
                id, 
                name, 
                last_name, 
                email,
                user,
                password,
                deleted
            ) VALUES (
                1, 
                'Jorge Luis', 
                'Cortes', 
                'admin@email.com',
                'admin',
                '" . bcrypt('123456') . "',
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
        Schema::dropIfExists('users');
    }
}
