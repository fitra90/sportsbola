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
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('idmatches');
            $table->string('home_team')->nullable();
            $table->string('away_team')->nullable();
            $table->string('final_score_home')->nullable();
            $table->string('final_score_away')->nullable();
            $table->string('referee')->nullable();
            $table->datetime('match_date')->nullable();
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
