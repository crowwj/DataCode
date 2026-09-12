<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hackathons', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->enum('format', [
                'hackathon',
                'buildathon'
            ]);

            $table->dateTime('start_time');
            $table->dateTime('end_time');

            $table->foreignId('classroom_id')
                ->nullable()
                ->constrained('classrooms')
                ->nullOnDelete();

            $table->timestamps();
        });
        DB::statement("
        ALTER TABLE hackathons
        ADD CONSTRAINT hackathons_time_check
        CHECK (end_time > start_time)
        ");
    }

    public function down(): void
    {
        Schema::dropIfExists('hackathons');
    }
};