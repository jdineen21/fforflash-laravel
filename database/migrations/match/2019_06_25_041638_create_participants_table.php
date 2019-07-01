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
        Schema::connection('match')->create('participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('gameId');
            $table->integer('championId');
            $table->string('highestAchievedSeasonTier')->nullable();
            $table->integer('player_id');
            $table->integer('spell1Id');
            $table->integer('spell2Id');
            $table->integer('teamId');

            $table->foreign('gameId')->references('gameId')->on('matches');
            $table->foreign('player_id')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('match')->dropIfExists('participants');
    }
}
