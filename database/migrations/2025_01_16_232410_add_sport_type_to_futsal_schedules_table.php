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
            $table->string('sport_type')->after('location');
        });
    }
    
    public function down()
    {
        Schema::table('futsal_schedules', function (Blueprint $table) {
            $table->dropColumn('sport_type');
        });
    }
};
