<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enrollment>
 */
class EnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => fake()->name(),
            'Address' => fake()->address(),
            'Subject1' => fake()->realText(10, true),
            'Subject2' => fake()->realText(10, true),
            'Subject3' => fake()->realText(10, true),
            'Subject4' => fake()->realText(10, true),
            'Subject5' => fake()->realText(10, true)
        ];
    }
}
