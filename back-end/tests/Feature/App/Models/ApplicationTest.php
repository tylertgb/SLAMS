<?php

use App\Models\Application;
use App\Models\Disbursement;
use App\Models\User;
use function Pest\Laravel\actingAs;

test('application can be marked as disbursed', function () {
    $user = User::factory()->withStudent()->create();
    $student = $user->student;
    actingAs($user);
    $application = Application::factory()->create([
        'student_id' => $student->id,
        'status' => Application::IS_ACCEPTED
    ]);

    Disbursement::factory()->create([
        'amount' => $application->amount + 1,
        'application_id' => $application->id
    ]);

    expect($application->fresh()->status)->toBe(Application::IS_DISBURSED);
});
