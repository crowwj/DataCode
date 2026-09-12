<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project_evaluations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('project_id')
                ->constrained('projects')
                ->cascadeOnDelete();

            $table->foreignId('jury_id')
                ->constrained('users')
                ->restrictOnDelete();

            $table->unsignedTinyInteger('score');
            $table->text('comments')->nullable();

            $table->unique(['project_id', 'jury_id']);

            $table->timestamps();
        });
        DB::statement("
        ALTER TABLE project_evaluations
        ADD CONSTRAINT project_evaluations_score_check
        CHECK (score BETWEEN 0 AND 100)
        ");
    }

    public function down(): void
    {
        Schema::dropIfExists('project_evaluations');
    }
};