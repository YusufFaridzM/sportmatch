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
        Schema::table('futsal_schedules', function (Blueprint $table) {
            $table->foreignId('user_id')
                  ->nullable() // Mengizinkan nilai NULL
                  ->default(null) // Menambahkan default NULL
                  ->change(); // Mengubah kolom yang sudah ada
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('futsal_schedules', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable(false)->default(0)->change();
        });
    }
};
