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
        Schema::create('players', function (Blueprint $table) {
            $table->increments('idplayers');
            $table->integer('idteams');
            $table->string('player_name');
            $table->string('player_height')->nullable();
            $table->string('player_weight')->nullable();
            $table->string('player_position')->nullable();
            $table->string('player_shirt_number')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
