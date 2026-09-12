<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('committee_votes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('proposal_id')
                ->constrained('committee_proposals')
                ->cascadeOnDelete();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->enum('vote', [
                'a_favor',
                'en_contra',
                'abstencion'
            ]);

            $table->dateTime('voted_at');

            $table->unique(['proposal_id', 'user_id']);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('committee_votes');
    }
};