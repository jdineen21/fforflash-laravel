<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('gameId');
            $table->integer('baronKills');
            $table->integer('dominionVictoryScore');
            $table->integer('dragonKills');
            $table->boolean('firstBaron');
            $table->boolean('firstBlood');
            $table->boolean('firstDragon');
            $table->boolean('firstInhibitor');
            $table->boolean('firstRiftHerald');
            $table->boolean('firstTower');
            $table->integer('inhibitorKills');
            $table->integer('riftHeraldKills');
            $table->integer('teamId');
            $table->integer('towerKills');
            $table->integer('vilemawKills');
            $table->string('wins');
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
        Schema::dropIfExists('teams');
    }
}
