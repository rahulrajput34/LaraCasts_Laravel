<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // We can give  the id manually if our data is less and to manage it
        // else we give the Employer::factory() means it will generate the id automatically Whenever we create the job
        return [
            'title' => $this->faker->jobTitle,
            'employer_id' => Employer::factory(),
            'salary' => $this->faker->numberBetween(30000, 120000),
        ];
    }


    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'salary' => "70,000 USD",
        ]);
    }
}
