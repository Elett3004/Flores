<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'precio' => $this->faker->randomFloat(2, 10000, 200000),
            'fecha_entrega' => $this->faker->date(),
            'estado' => $this->faker->randomElement(['activo', 'terminado', 'cancelado']),
            'activo' => $this->faker->boolean(80), // 80% chance of being active
        ];
    }
}
