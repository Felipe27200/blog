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
        /* Se usa el método factory de la clase curso indicandole
        que cree 50 registros, son el argumento y el método create(),
        respectivamente. */
        Curso::factory(50)->create();
    }
}
