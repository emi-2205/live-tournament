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
        Schema::create('partita', function (Blueprint $table) {
            $table->id('id');
            $table->string('red_team_ID');
            $table->string('red_player_1');
            $table->string('red_player_2');
            $table->string('blue_team_ID');
            $table->string('blue_player_1');
            $table->string('blue_player_2');
            $table->integer('red_goals')->nullable();
            $table->integer('blue_goals')->nullable();
            $table->boolean('live');
            $table->boolean('finished');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partita');
    }
};
