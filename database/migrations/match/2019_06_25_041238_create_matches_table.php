<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('match')->create('matches', function (Blueprint $table) {
            $table->integer('gameCreation')->nullable();
            $table->integer('gameDuration')->nullable();
            $table->integer('gameId')->primary();
            $table->string('gameMode')->nullable();
            $table->string('gameType')->nullable();
            $table->string('gameVersion')->nullable();
            $table->integer('mapId')->nullable();
            $table->string('platformId')->nullable();
            $table->integer('queueId')->nullable();
            $table->integer('seasonId')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
