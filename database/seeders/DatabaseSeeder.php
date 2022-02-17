<?php

namespace Database\Seeders;

// Se debe traer la clase del módelo
use App\Models\Curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        /* Se genera la instancia del modelo */
        $curso = new Curso();

        /* Se le asignan valores a sus propiedades */
        $curso->name = "Laravel";
        $curso->description = "El mejor frameword PHP";
        $curso->categoria = "Desarrollo web";

        // Este método guarda los valores en la BD cuando se crea la tabla
        // y luego se ejecuta el comando "php artisan db:seed"
        $curso->save();
    }
}
