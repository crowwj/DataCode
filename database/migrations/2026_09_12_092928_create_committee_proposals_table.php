<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('committee_proposals', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description');

            $table->foreignId('created_by')
                ->constrained('users')
                ->restrictOnDelete();

            $table->foreignId('status_id')
                ->constrained('proposal_statuses')
                ->restrictOnDelete();

            $table->dateTime('voting_closes_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('committee_proposals');
    }
};