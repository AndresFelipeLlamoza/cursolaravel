<?php

namespace Database\Factories;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    protected $model = Curso::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),                            
            'description' => $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(['desarrollo web', 'diseño web', 'desarrollo en escritorio'])
        ];
    }
}
