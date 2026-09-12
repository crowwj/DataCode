<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->restrictOnDelete();

            $table->string('concept');

            $table->unsignedBigInteger('reference_id')->nullable();

            $table->decimal('amount', 10, 2);

            $table->enum('status', [
                'pendiente',
                'pagado',
                'fallido'
            ])->default('pendiente');

            $table->dateTime('paid_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};