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
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_last_name')->after('name');
            $table->string('second_last_name')->nullable()->after('first_last_name');
            $table->string('phone')->after('password');
            $table->string('institutional_id')->unique()->after('phone');
            $table->foreignId('role_id')
                ->after('institutional_id')
                ->constrained()
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('municipality_id')
                ->after('role_id')
                ->constrained()
                ->restrictOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId('role_id');
            $table->dropConstrainedForeignId('municipality_id');
            $table->dropUnique(['institutional_id']);
            $table->dropColumn([
                'first_last_name',
                'second_last_name',
                'phone',
                'institutional_id',
            ]);
        });
    }
};
