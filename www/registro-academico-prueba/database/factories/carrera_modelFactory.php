<?php

namespace Database\Factories;

use App\Models\carrera_model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<carrera_model>
 */
class carrera_modelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public $carreras = [
        'Ingeniería de Sistemas Informáticos',
        'Ingeniería Civil',
        'Ingeniería Industrial',
        'Ingeniería Eléctrica',
        'Licenciatura en Admnistración de Empresas',
        'Licenciatura en Contaduría Pública',
        'Licenciatura en Ciencias jurídicas',
        'Licenciatura en Matemáticas',
        'Licenciatura en Enfermería'
    ];
    public function definition(): array
    {
        return [
             'codigo' => strtoupper(
                fake()->unique()->bothify('???###')
            ),
            'nombre_carrera' => fake()->randomElement($this->carreras)
        ];
    }
}
