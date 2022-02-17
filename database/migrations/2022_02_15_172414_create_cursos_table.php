<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            // crea un id autoincrement y big integer
            $table->id();

            // el argumento es el nombre de la columna
            $table->string('name');
            $table->text('description');
            $table->text('categoria');

            // crea dos columnas: create_at y update_at
            // Que almacenan respectivamente, la fecha de creación y la última
            // actualización del registro
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
