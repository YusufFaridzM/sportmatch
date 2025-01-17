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
            $table->string('deskripsi')->nullable();  // Add the 'deskripsi' column
        });
    }
    
    public function down()
    {
        Schema::table('futsal_schedules', function (Blueprint $table) {
            $table->dropColumn('deskripsi');  // Remove the 'deskripsi' column if the migration is rolled back
        });
    }
    
};
