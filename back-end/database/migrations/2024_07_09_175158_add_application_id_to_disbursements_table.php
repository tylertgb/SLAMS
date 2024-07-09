<?php

use App\Models\Application;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::table('disbursements', function (Blueprint $table) {
            $table->foreignIdFor(Application::class)->after('student_id');
        });
    }

};
