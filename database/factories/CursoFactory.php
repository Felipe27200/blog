<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// Debe extender al modelo relacionado a la tabla
use App\Models\Curso;

class CursoFactory extends Factory
{
    protected $model = Curso::class;

    // Este método es el que inserta los registros en los campos
    public function definition()
    {
        // Se deben definir todos los campos que tiene la tabla
        return [
            // Retorna un array asociativo al cual se le asigna una clave
            // con el nombre del campo y un valor gracias a los métodos de faker
            'name' => $this->faker->sentence(), // Retorna una oración
            'description' => $this->faker->paragraph(), // retorna un parrafo
            'categoria' => $this->faker->randomElement(['Desarrollo web', 'Diseño web']) // Retorna un valor random entre los dos posible del array
        ];
    }
}
