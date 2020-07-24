<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableUsersPrivileges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //TABLA PRIVILEGIOS_USUARIOS
        Schema::create('users_privileges', function(Blueprint $table) {
            $table->primary(['user_id', 'privilege_id']);
            $table->integer('user_id')->unsigned();
            $table->integer('privilege_id')->unsigned();

            $table->integer('created_user_id')->unsigned();
            $table->datetime('created_at');
        });

        //NEW ROW
        DB::statement("INSERT INTO
            users_privileges
        (
            user_id, privilege_id, created_user_id, created_at
        )
        VALUES
            (1, 1, 1, '2017-01-01 00:00:00'),
            (1, 2, 1, '2017-01-01 00:00:00'),
            (1, 3, 1, '2017-01-01 00:00:00'),
            (1, 4, 1, '2017-01-01 00:00:00'),
            (1, 5, 1, '2017-01-01 00:00:00'),
            (1, 6, 1, '2017-01-01 00:00:00'),

            (1, 7, 1, '2017-01-01 00:00:00'),
            (1, 8, 1, '2017-01-01 00:00:00'),
            (1, 9, 1, '2017-01-01 00:00:00'),
            (1, 10, 1, '2017-01-01 00:00:00'),
            (1, 11, 1, '2017-01-01 00:00:00'),
            (1, 12, 1, '2017-01-01 00:00:00'),
            (1, 13, 1, '2017-01-01 00:00:00'),
            (1, 14, 1, '2017-01-01 00:00:00'),
            (1, 15, 1, '2017-01-01 00:00:00');");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_privileges');
    }
}
