<?php

namespace Database\Factories;

use App\Models\Show;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Episode>
 */
class EpisodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'show_id' => Show::factory()->createOne()->id,
            'name' => $this->faker->name,
            'season' => $this->faker->numberBetween(1,20),
            'number' => $this->faker->numberBetween(1,24),
            'watched' => $this->faker->boolean,
        ];
    }
}
