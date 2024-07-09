<?php

namespace Database\Factories;

use App\Models\Application;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ApplicationFactory extends Factory
{
    protected $model = Application::class;

    public function definition(): array
    {
        return [
            'amount' => $this->faker->randomFloat(),
            'reason' => $this->faker->word(),
            'status' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'code' => $this->faker->word(),
            'student_id' => Student::factory(),
        ];
    }
}
