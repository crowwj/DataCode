<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
        });

        DB::table('municipalities')->insert([
            ['name' => 'Guamúchil'],
            ['name' => 'Los Mochis'],
            ['name' => 'El Fuerte'],
            ['name' => 'Guasave'],
            ['name' => 'Culiacán'],
            ['name' => 'Mazatlán'],
            ['name' => 'Escuinapa'],
            ['name' => 'El Rosario'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('municipalities');
    }
};
