<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Skripsi;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class SkripsiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Skripsi::class;

    public function definition(): array
    {
        return [
            'Judul Skripsi' => $this->faker->unique()->sentence(5),
            'Author' => $this->faker->name(),
            'Tahun Terbit' => $this->faker->year,
        ];
    }
}
