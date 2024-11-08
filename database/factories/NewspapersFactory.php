<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Newspapers;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Newspapers>
 */
class NewspapersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Newspapers::class;

    public function definition(): array
    {
        return [
            'Judul Surat Kabar' => $this->faker->unique()->sentence(5),
            'Author' => $this->faker->name(),
            'Tahun Terbit' => $this->faker->year,
        ];
    }
}
