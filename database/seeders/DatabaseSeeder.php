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
        // Esta es para ejecutar la clase UserFactory mediante el modelo de User
        // \App\Models\User::factory(10)->create();

        /* Se usa el método factory de la clase curso indicandole
        que cree 50 registros, son el argumento y el método create(),
        respectivamente. 
        Esta llamada es más recomendable, ya que todo se puede 
        ejecutar directamente desde esta clase */
        Curso::factory(50)->create();
    }
}
