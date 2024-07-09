<?php

namespace Database\Factories;

use App\Models\Application;
use App\Models\Disbursement;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class DisbursementFactory extends Factory
{
    protected $model = Disbursement::class;

    public function definition(): array
    {
        return [

            'application_id' => Application::factory(),
            'amount' => $this->faker->randomFloat(),
            'disbursed_at' => Carbon::now(),
            'is_active' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'disbursed_by' => User::factory(),
        ];
    }
}
