<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('gameId');
            $table->integer('championId')->nullable();
            $table->string('highestAchievedSeasonTier')->nullable();
            $table->string('accountId');
            $table->integer('spell1Id')->nullable();
            $table->integer('spell2Id')->nullable();
            $table->integer('teamId')->nullable();
            $table->timestamps();

            $table->foreign('gameId')->references('gameId')->on('matches');
            $table->foreign('accountId')->references('accountId')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
