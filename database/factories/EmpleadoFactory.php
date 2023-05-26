<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $description = fake()->text(200); // Genera un texto aleatorio de hasta 200 caracteres
        //clase : use Illuminate\Support\Str;
        $truncatedDescription = Str::limit($description, 10);
        return [
            // El helper fake() proporciona una instancia de la clase Faker, por lo que puedes llamar
            //sino tambien se podria importando : use Faker\Generator as Faker;
            //y se colocaria por ejemplo:  'sexo' => $faker->randomElement(['m', 'f']),
            'nombre' => fake()->name(),
            'nombre' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'sexo' => fake()->randomElement(['M', 'F']),
            'boletin' => fake()->randomElement([1, 0]),
            'descripcion' => $truncatedDescription,
            'Foto' => fake()->realText($maxNbChars = 10, $indexSize = 1),
        ];
    }
}
