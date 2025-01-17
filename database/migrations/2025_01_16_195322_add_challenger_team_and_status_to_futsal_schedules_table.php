<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('futsal_schedules', function (Blueprint $table) {
        $table->string('challenger_team')->nullable(); // Nama tim penantang
        $table->string('status')->default('Available'); // Status jadwal
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('futsal_schedules', function (Blueprint $table) {
            //
        });
    }
};
