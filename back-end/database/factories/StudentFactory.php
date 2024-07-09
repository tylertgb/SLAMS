<?php

namespace Database\Factories;

use App\Models\Program;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'index_number' => $this->faker->word(),
            'entry_year' => $this->faker->word(),
            'level' => $this->faker->word(),
            'exit_year' => $this->faker->word(),
            'fullname' => $this->faker->word(),
            'gender' => $this->faker->word(),
            'contact_address' => $this->faker->address(),
            'contact_email' => $this->faker->unique()->safeEmail(),
            'contact_phone' => $this->faker->phoneNumber(),
            'annual_income' => $this->faker->randomFloat(),
            'tin' => $this->faker->word(),
            'guardian_fullname' => $this->faker->word(),
            'guardian_phone_number' => $this->faker->phoneNumber(),
            'guardian_email' => $this->faker->unique()->safeEmail(),
            'guardian_income' => $this->faker->randomFloat(),
            'transcript' => $this->faker->word(),
            'proof_of_enrolment' => $this->faker->word(),
            'ezwitch_card' => $this->faker->word(),
            'profile_picture' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'program_id' => Program::factory(),
        ];
    }
}
