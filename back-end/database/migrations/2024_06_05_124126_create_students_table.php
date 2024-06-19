<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('index_number');
            $table->string('program')->nullable();
            $table->string('entry_year')->nullable();
            $table->string('level')->nullable();
            $table->string('exit_year')->nullable();

            $table->string('fullname');
            $table->string('gender')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            
            $table->decimal('annual_income')->nullable();
            $table->string('tin')->nullable();

            
            $table->string('guardian_fullname')->nullable();
            $table->string('guardian_phone_number')->nullable();
            $table->string('guardian_email')->nullable();
            $table->decimal('guardian_income')->nullable(); 

            $table->string('transcript')->nullable();
            $table->string('proof_of_enrolment')->nullable();
            $table->string('ezwitch_card')->nullable();
            $table->string('profile_picture')->nullable();

 
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
