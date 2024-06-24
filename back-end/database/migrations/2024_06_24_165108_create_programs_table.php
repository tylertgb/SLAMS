<?php

use App\Models\Program;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('students', function(Blueprint $table){
            $table->dropColumn('program');
            $table->foreignIdFor(Program::class)->nullable()->after('student_id');
        });
    }
};
