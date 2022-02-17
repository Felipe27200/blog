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
        /* Así se le indica que llame y ejecute el método
        run() de la clase CuroSeeder */
        $this->call(CursoSeeder::class);
    }
}
