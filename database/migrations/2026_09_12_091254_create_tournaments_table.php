<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();

            $table->string('game');
            $table->unsignedSmallInteger('capacity');

            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->dateTime('registration_deadline')->nullable();

            $table->foreignId('status_id')
                ->constrained('event_statuses')
                ->restrictOnDelete();

            $table->foreignId('organizer_id')
                ->constrained('users')
                ->restrictOnDelete();

            $table->foreignId('classroom_id')
                ->constrained('classrooms')
                ->restrictOnDelete();

            $table->timestamps();
        });
        DB::statement("
        ALTER TABLE tournaments
        ADD CONSTRAINT tournaments_time_check
        CHECK (end_time > start_time)
        ");
    }

    public function down(): void
    {
        Schema::dropIfExists('tournaments');
    }
};