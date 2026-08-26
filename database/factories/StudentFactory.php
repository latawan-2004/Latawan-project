<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'program' => fake()->randomElement([
                'BSCS',
                'BSIT',
                'BSIS',
            ]),
            'gender' => fake()->randomElement([
                'Male',
                'Female',
            ]),
            'birthdate' => fake()
                ->dateTimeBetween('-25 years', '-17 years')
                ->format('Y-m-d'),
            'yr_level' => fake()->numberBetween(1, 4),
        ];
    }
}
