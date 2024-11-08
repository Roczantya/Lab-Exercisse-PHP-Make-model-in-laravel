<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CD;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class CDFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = CD::class;

    public function definition(): array
    {
        return [
                'Judul CD' => $this->faker->sentence(5),
                'Author' => $this->faker->name(),
                'Tahun Terbit' => $this->faker->year,
                
                
        ];
    }
}
