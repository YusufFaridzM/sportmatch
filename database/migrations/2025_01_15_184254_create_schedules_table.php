<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('challenging_team_id')->constrained('teams')->onDelete('set null'); // Tim yang menantang
            $table->foreignId('challenged_team_id')->nullable()->constrained('teams')->onDelete('set null'); // Tim yang ditantang
            $table->string('sport');
            $table->date('date');
            $table->time('time');
            $table->string('location');
            $table->timestamps();
        });
        
    }

    public function down(): void {
        Schema::dropIfExists('schedules');
    }
};