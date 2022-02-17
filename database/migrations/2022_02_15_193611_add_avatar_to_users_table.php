<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvatarToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // El primer argumento es el nombre de la tabla que se quiere modificar
        Schema::table('users', function (Blueprint $table) {
            //Así se le indica que añada una nueva columna a la tabla
            // esta debe ser nullable para que reciba valores nulos
            // esto porque la tabla ya fue creada

            /* Con after() se le indica que inserte la columna después de
            la columna que se le paso como argumento a after()  */
            $table->string('avatar')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //  Así se le indica que elimine la columna con el nombre de la cadena
            $table->dropColumn('avatar');
        });
    }
}
