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
            $table->integer('championId');
            $table->string('highestAchievedSeasonTier');
            $table->string('accountId');
            $table->integer('spell1Id');
            $table->integer('spell2Id');
            $table->integer('teamId');
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
