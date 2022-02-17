<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Se genera la instancia del modelo */
        $curso = new Curso();

        /* Se le asignan valores a sus propiedades */
        $curso->name = "Laravel";
        $curso->description = "El mejor frameword PHP";
        $curso->categoria = "Desarrollo web";

        // Este método guarda los valores en la BD cuando se crea la tabla
        // y luego se ejecuta el comando "php artisan db:seed"
        $curso->save();

        // AÑADE 2 REGISTROS MÁS A CURSOS EN LA BD

        $curso2 = new Curso();

        $curso2->name = "Laravel";
        $curso2->description = "El mejor frameword PHP";
        $curso2->categoria = "Desarrollo web";

        $curso2->save();

        $curso3 = new Curso();

        $curso3->name = "Laravel";
        $curso3->description = "El mejor frameword PHP";
        $curso3->categoria = "Desarrollo web";

        $curso3->save();
    }
}
