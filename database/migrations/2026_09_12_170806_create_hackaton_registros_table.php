<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hackaton_registros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('semestre');
            $table->string('grupo');
            $table->string('region');
            $table->string('talla');
            $table->string('rol');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hackaton_registros');
    }
};