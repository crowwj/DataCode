<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->foreignId('shift_id')
                ->constrained('shifts')
                ->restrictOnDelete();

            $table->text('materials')->nullable();
            $table->unsignedSmallInteger('capacity');
            $table->text('proposal')->nullable();
          
            $table->dateTime('start_time');
            $table->dateTime('end_time');

            $table->foreignId('status_id')
                ->constrained('event_statuses')
                ->restrictOnDelete();

            $table->foreignId('instructor_id')
                ->constrained('users')
                ->restrictOnDelete();

            $table->foreignId('classroom_id')
                ->constrained('classrooms')
                ->restrictOnDelete();

            $table->timestamps();
        });
        DB::statement("
        ALTER TABLE workshops
        ADD CONSTRAINT workshops_time_check
        CHECK (end_time > start_time)
        ");
    }

    public function down(): void
    {
        Schema::dropIfExists('workshops');
    }
};