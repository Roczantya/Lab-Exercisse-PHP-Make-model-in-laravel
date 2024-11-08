<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Journal;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class JournalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Journal::class;

    public function definition(): array
    {
        return [
            'Judul Journal' => $this->faker->unique()->sentence(5),
            'Author' => $this->faker->name(),
            'Tahun Terbit' => $this->faker->year,
        ];
    }
}
